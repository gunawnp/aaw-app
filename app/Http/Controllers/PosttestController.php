<?php

namespace App\Http\Controllers;

use App\Models\Maintest;
use App\Models\Posttest;
use App\Charts\PosttestChart;
use Illuminate\Http\Request;

function execute(Request $request)
{
    $validatedData = $request->validate([
        'code' => [
            'required',
            'string',
            'max:2000',
            // 'regex:/^(system|exec|popen|passthru|shell_exec|proc_open)$/i'
        ],
    ]);

    $code = $validatedData['code'];

    // simpan kode ke file
    $file = storage_path('app/code.c');
    file_put_contents($file, $code);

    // eksekusi kode C menggunakan shell_exec
    $run = shell_exec("gcc $file -o " . storage_path('app/code') . " 2>&1");

    // menjalankan program, berhasil atau error
    if ($run == null) {
        $output = shell_exec(storage_path('app/code'));
    } else {
        $output = 'error';
    }

    return $output;
}

function executetwo(Request $request)
{
    $validatedData = $request->validate([
        'code' => [
            'required',
            'string',
            'max:2000',
            // 'regex:/^(system|exec|popen|passthru|shell_exec|proc_open)$/i'
        ],
    ]);

    $code = $validatedData['code'];

    // simpan kode ke file
    $file = storage_path('app/code.c');
    file_put_contents($file, $code);

    // eksekusi kode C menggunakan shell_exec
    $run = shell_exec("gcc $file -o " . storage_path('app/code') . " 2>&1");

    // menjalankan program, berhasil atau error
    if ($run == null) {
        $output = true;
    } else {
        $output = false;
    }

    return $output;
}

class PosttestController extends Controller
{
    public function index()
    {
        $data = Posttest::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.posttest.index', [
            "title" => "Posttest Asesmen Adaptif",
            "header" => "Pendahuluan Asesmen Adaptif",
            "data" => $data,
            "done" => $done
        ]);
    }

    public function exone(Request $request)
    {
        $output = execute($request);
        return redirect()->back()->with('output', $output);
    }

    public function show()
    {
        $data = Posttest::firstWhere('user_id', auth()->user()->id);

        $datatest = Maintest::simplePaginate(1);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.posttest.show', [
            "title" => "Posttest Asesmen Adaptif",
            "header" => "Posttest Asesmen Adaptif",
            "datatest" => $datatest,
            "done" => $done
        ]);
    }

    public function store(Request $request)
    {
        $data = Posttest::firstWhere('user_id', auth()->user()->id);

        $id = $request->id;
        $code = $request->code;

        $datatest = Maintest::firstWhere('id', $id);

        $no = $datatest->answer_id;
        $score = $datatest->score;

        $type = $datatest->answer->type;
        $answer = $datatest->answer->answer;

        $iftrue = executetwo($request);

        $code_trim = str_replace(' ', '', $code);

        if (str_contains($code_trim, $answer) && str_contains($code, $type) && $iftrue) { //cek apakah kode syarat seperti else if dan >100000 dan cek apakah kodenya berjalan atau tidak

            if ($data) { //cek apakah datanya ada
                $judge = $data->judge;

                if ($data['no_' . $no]) {
                    $datano = collect(explode(',', $data['no_' . $no]));
                    $dataco = collect(explode(',', $data['co_' . $no]));

                    $datano->push($score);
                    $dataco->push(1);

                    $dataInput['no_' . $no] = implode(',', $datano->all());
                    $dataInput['co_' . $no] = implode(',', $dataco->all());
                } else {
                    $dataInput['no_' . $no] = $score;
                    $dataInput['co_' . $no] = 1;
                }

                // kalo ada datanya, update

                $judge = $judge + 1;
                if ($judge == 2) {
                    $picker = $id + 4;
                    $dataInput['judge'] = 0;
                } else {
                    $picker = $id + 5;
                    $dataInput['judge'] = $judge;
                }

                //update ke database
                $total = $data->total;
                $total = $total + 1;
                $dataInput['total'] = $total;

                Posttest::where('user_id', auth()->user()->id)->update($dataInput);
                if ($no == 20) {
                    return redirect('home/posttest/begin?page=' . $id)->with(['success' => 'Nomor ' . $no . ' sudah terisi!', 'end' => 'Selesai']);
                }
            } else {
                // ga ada, isi
                $dataInput['user_id'] = auth()->user()->id;
                $dataInput['no_' . $no] = $score;
                $dataInput['co_' . $no] = 1;
                $dataInput['judge'] = 1;
                $dataInput['total'] = 1;
                $picker = $id + 5;
                //isi ke database
                Posttest::create($dataInput);
            }
        } else {
            if ($data) { //cek apakah datanya ada
                // kalo ada datanya, update

                if ($data['no_' . $no]) {
                    $datano = collect(explode(',', $data['no_' . $no]));
                    $dataco = collect(explode(',', $data['co_' . $no]));

                    $datano->push($score);
                    $dataco->push(0);

                    $dataInput['no_' . $no] = implode(',', $datano->all());
                    $dataInput['co_' . $no] = implode(',', $dataco->all());
                } else {
                    $dataInput['no_' . $no] = $score;
                    $dataInput['co_' . $no] = 0;
                }
                $dataInput['judge'] = 0;

                $total = $data->total;
                $total = $total + 1;
                $dataInput['total'] = $total;

                //update ke database
                Posttest::where('user_id', auth()->user()->id)->update($dataInput);

                if (str_contains($datatest->no, 'b')) {
                    $picker = $id + 5;
                    if ($no == 20) {
                        return redirect('home/posttest/begin?page=' . $id)->with(['success' => 'Nomor ' . $no . ' sudah terisi!', 'end' => 'Selesai']);
                    }
                } else {
                    $picker = $id + 1;
                }
            } else {
                // ga ada, isi
                $dataInput['user_id'] = auth()->user()->id;
                $dataInput['no_' . $no] = $score;
                $dataInput['co_' . $no] = 0;
                $dataInput['judge'] = 0;
                $dataInput['total'] = 1;
                $picker = $id + 1;
                //isi ke database
                Posttest::create($dataInput);
            }
        }

        return redirect('home/posttest/begin?page=' . $picker)->with('success', 'Nomor ' . $no . ' sudah terisi!');
    }

    public function score()
    {
        $data = Posttest::firstWhere('user_id', auth()->user()->id);

        $array = [];
        $datachart = [];
        $chart = null;

        if ($data && $data->correct === null) {
            $correct = 0;
            for ($i = 1; $i < 21; $i++) {
                $val = null;
                if (str_contains($data['co_' . $i], '1')) {
                    $val = 1;
                }
                $done = true;
                if ($val === null) {
                    $done = false;
                }
                $correct = $correct + $val;
            }

            $total = $data->total;
            $wrong = $total - $correct;
            $sum = $correct / $total * 100;

            if ($done) {
                $dataInput['correct'] = $correct;
                $dataInput['wrong'] = $wrong;
                $dataInput['sum'] = $sum;
                //update ke database
                $data->update($dataInput);


                for ($i = 1; $i < 21; $i++) {
                    $no = explode(',', $data['no_' . $i]);
                    $co = explode(',', $data['co_' . $i]);
                    $combine = array_combine($no, $co);
                    array_push($array, $combine);

                    $value = substr($data['no_' . $i], -1);
                    array_push($datachart, $value);
                }

                $chart = new PosttestChart;
                $chart->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20']);
                $chart->dataset('Grafik Hasil Posttest', 'line', $datachart);
            }
        } elseif ($data && $data->correct !== null) {
            $done = true;

            for ($i = 1; $i < 21; $i++) {
                $no = explode(',', $data['no_' . $i]);
                $co = explode(',', $data['co_' . $i]);
                $combine = array_combine($no, $co);
                array_push($array, $combine);

                $value = substr($data['no_' . $i], -1);
                array_push($datachart, $value);
            }

            $chart = new PosttestChart;
            $chart->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20']);
            $chart->dataset('Grafik Hasil Posttest', 'line', $datachart);
            
        } else {
            $done = false;
        }

        return view('home.posttest.score', [
            "title" => "Posttest Asesmen Adaptif",
            "header" => "Penilaian Posttest Asesmen Adaptif",
            "array" => $array,
            "data" => $data,
            "done" => $done,
            "chart" => $chart
        ]);
    }
}

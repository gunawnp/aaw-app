<?php

namespace App\Http\Controllers;

use App\Models\Pretest;
use App\Models\Maintest;
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

class PretestController extends Controller
{
    public function index()
    {
        $data = Pretest::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            $done = true;
            if ($data->no_10 === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.pretest.index', [
            "title" => "Pretest Asesmen Adaptif",
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
        $data = Pretest::firstWhere('user_id', auth()->user()->id);

        $datatest = Maintest::simplePaginate(1);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.pretest.show', [
            "title" => "Pretest Asesmen Adaptif",
            "header" => "Pretest Asesmen Adaptif",
            "datatest" => $datatest,
            "done" => $done
        ]);
    }

    public function store(Request $request)
    {
        $data = Pretest::firstWhere('user_id', auth()->user()->id);

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

                if ($data['no_'. $no]) {
                    $datano = collect(explode(',', $data['no_' . $no]));
                    $dataco = collect(explode(',', $data['co_' . $no]));

                    $datano->push($score);
                    $dataco->push(1);

                    $dataInput['no_' . $no] = implode(',', $datano->all());
                    $dataInput['co_' . $no] = implode(',', $dataco->all());
                }else {
                    $dataInput['no_' . $no] = $score;
                    $dataInput['co_' . $no] = 1;
                }

                // kalo ada datanya, update
                
                $judge = $judge + 1;
                if ($judge == 2) {
                    $picker = $id + 4;
                    $dataInput['judge'] = 0;
                }else{
                    $picker = $id + 5;
                    $dataInput['judge'] = $judge;
                }

                //update ke database
                $total = $data->total;
                $total = $total + 1;
                $dataInput['total'] = $total;

                Pretest::where('user_id', auth()->user()->id)->update($dataInput);
                if ($no == 20) {
                    return redirect('home/pretest/begin?page=' . $id)->with(['success' => 'Nomor ' . $no . ' sudah terisi!', 'end' => 'Selesai']);
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
                Pretest::create($dataInput);
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
                Pretest::where('user_id', auth()->user()->id)->update($dataInput);

                if (str_contains($datatest->no, 'b')) {
                    $picker = $id + 5;
                    if ($no == 20) {
                        return redirect('home/pretest/begin?page=' . $id)->with(['success' => 'Nomor ' . $no . ' sudah terisi!', 'end' => 'Selesai']);
                    }
                }else {
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
                Pretest::create($dataInput);
            }
        }
        
        return redirect('home/pretest/begin?page=' . $picker)->with('success', 'Nomor ' . $no . ' sudah terisi!');

    }

    public function score() {
        $data = Pretest::firstWhere('user_id', auth()->user()->id);
        if ($data && $data->correct === null) {
            $correct = 0;
            for ($i = 1; $i < 21; $i++) {
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
            }
        } elseif ($data && $data->correct !== null) {
            $done = true;
        } else {
            $done = false;
        }

        return view('home.pretest.score', [
            "title" => "Pretest Asesmen Adaptif",
            "header" => "Penilaian Pretest Asesmen Adaptif",
            "data" => $data,
            "done" => $done
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Charts\PretestChart;
use App\Models\Pretest;
use App\Models\Maintest;
use Illuminate\Http\Request;

class PretestController extends Controller
{
    public function index()
    {
        $data = Pretest::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.pretest.index', [
            "title" => "Pretest Asesmen Adaptif",
            "header" => "Pendahuluan Asesmen Adaptif",
            "done" => $done
        ]);
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
        $validated = $request->validate([
            'answerOption' => 'required',
        ]);

        $id_soal = $request->id_soal;
        $id_jawaban = $request->id_jawaban;
        $data = Pretest::firstWhere('user_id', auth()->user()->id);
        $datatest = Maintest::firstWhere('id', $id_soal);
        
        $no = $datatest->no;
        $score = $datatest->score;
        $answer = $datatest->answer->answer;

        if ($validated['answerOption'] == $answer) {

            if ($data) { //cek apakah datanya ada
                $judge = $data->judge;

                if ($data['no_'. $id_jawaban]) {
                    $datano = collect(explode(',', $data['no_' . $id_jawaban]));
                    $dataco = collect(explode(',', $data['co_' . $id_jawaban]));

                    $datano->push($score);
                    $dataco->push($score);

                    $dataInput['no_' . $id_jawaban] = implode(',', $datano->all());
                    $dataInput['co_' . $id_jawaban] = implode(',', $dataco->all());
                }else {
                    $dataInput['no_' . $id_jawaban] = $score;
                    $dataInput['co_' . $id_jawaban] = $score;
                }

                // kalo ada datanya, update
                
                $judge = $judge + 1;
                if ($judge == 2) {
                    if (str_contains($no, '5')) {
                        $picker = $id_soal + 5;
                    }else{
                        $picker = $id_soal + 4;
                    }
                    $dataInput['judge'] = 0;
                }else{
                    $picker = $id_soal + 5;
                    $dataInput['judge'] = $judge;
                }

                //update ke database
                $total = $data->total;
                $total = $total + 1;
                $dataInput['total'] = $total;

                Pretest::where('user_id', auth()->user()->id)->update($dataInput);
                if ($picker > 100) {
                    return redirect()->back()->with(['success' => 'Tes sudah terisi!', 'end' => 'Selesai']);
                }
            } else {
                // ga ada, isi
                $dataInput['user_id'] = auth()->user()->id;
                $dataInput['no_' . $id_jawaban] = $score;
                $dataInput['co_' . $id_jawaban] = $score;
                $dataInput['judge'] = 1;
                $dataInput['total'] = 1;
                $picker = $id_soal + 5;
                //isi ke database
                Pretest::create($dataInput);
            }
        } else {
            
            if ($data) { //cek apakah datanya ada
                // kalo ada datanya, update

                if ($data['no_' . $id_jawaban]) {
                    $datano = collect(explode(',', $data['no_' . $id_jawaban]));
                    $dataco = collect(explode(',', $data['co_' . $id_jawaban]));

                    $datano->push($score);
                    $dataco->push(0);

                    $dataInput['no_' . $id_jawaban] = implode(',', $datano->all());
                    $dataInput['co_' . $id_jawaban] = implode(',', $dataco->all());
                } else {
                    $dataInput['no_' . $id_jawaban] = $score;
                    $dataInput['co_' . $id_jawaban] = 0;
                }
                $dataInput['judge'] = 0;

                $total = $data->total;
                $total = $total + 1;
                $dataInput['total'] = $total;
                
                //update ke database
                Pretest::where('user_id', auth()->user()->id)->update($dataInput);

                if (str_contains($no, '.1.')) {
                    $picker = $id_soal + 5;
                }else {
                    $picker = $id_soal + 1;
                }
                
                if ($picker > 100) {
                    return redirect()->back()->with(['success' => 'Tes sudah terisi!', 'end' => 'Selesai']);
                }
            } else {
                // ga ada, isi
                $dataInput['user_id'] = auth()->user()->id;
                $dataInput['no_' . $id_jawaban] = $score;
                $dataInput['co_' . $id_jawaban] = 0;
                $dataInput['judge'] = 0;
                $dataInput['total'] = 1;
                $picker = $id_soal + 1;
                //isi ke database
                Pretest::create($dataInput);
            }
        }
        
        return redirect('home/pretest/begin?page=' . $picker)->with('success', 'Nomor sebelumnya sudah terisi!');

    }

    public function score() {
        $data = Pretest::firstWhere('user_id', auth()->user()->id);

        $array = [];
        $datachart = [];
        $chart = null;

        if ($data && $data->correct === null) {
            $correct = 0;
            for ($i = 1; $i < 21; $i++) {
                $val = null;
                if ($data['co_' . $i] != null) {
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

                $chart = new PretestChart;
                $chart->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20']);
                $chart->dataset('Grafik Hasil Pretest', 'line', $datachart);
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

            $chart = new PretestChart;
            $chart->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20']);
            $chart->dataset('Grafik Hasil Pretest', 'line', $datachart);
            
        } else {
            $done = false;
        }


        return view('home.pretest.score', [
            "title" => "Pretest Asesmen Adaptif",
            "header" => "Penilaian Pretest Asesmen Adaptif",
            "array" => $array,
            "data" => $data,
            "done" => $done,
            "chart" => $chart
        ]);
    }
}

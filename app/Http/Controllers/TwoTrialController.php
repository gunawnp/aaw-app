<?php

namespace App\Http\Controllers;

use App\Models\Maintest;
use App\Models\TwoTrial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwoTrialController extends Controller
{


    public function show()
    {
        $data = Maintest::simplePaginate(1);

        $datatest = TwoTrial::firstWhere('user_id', auth()->user()->id);

        return view('home.trials-2.show', [
            "title" => "Tes Gaya Belajar",
            "header" => "Kuesioner Gaya Belajar Kolb",
            "data" => $data,
            "datatest" => $datatest
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'answerOption' => 'required',
        ]);

        $id = $request->id;
        $data = TwoTrial::firstWhere('user_id', auth()->user()->id);
        $datatest = Maintest::firstWhere('id', $id);

        $answer = $datatest->answer->answer;

        if ($validated['answerOption'] == $answer) { //benar

            if ($data) { //cek apakah datanya ada

                if ($data['trials']) {
                    $datano = collect(explode(',', $data['trials']));
                    $datano->push(1);

                    $dataInput['trials'] = implode(',', $datano->all());
                } else {
                    $dataInput['trials'] = 1;
                }

                //update ke database
                $total = $data->total;
                $total = $total + 1;
                $dataInput['total'] = $total;

                TwoTrial::where('user_id', auth()->user()->id)->update($dataInput);
            } else { // ga ada, isi

                $dataInput['user_id'] = auth()->user()->id;
                $dataInput['trials'] = 1;
                $dataInput['total'] = 1;
                //isi ke database
                TwoTrial::create($dataInput);
            }
        } else { // salah

            if ($data) { //cek apakah datanya ada, ada

                if ($data['trials']) {
                    $datano = collect(explode(',', $data['trials']));
                    $datano->push(0);

                    $dataInput['trials'] = implode(',', $datano->all());
                } else {
                    $dataInput['trials'] = 0;
                }

                //update ke database

                TwoTrial::where('user_id', auth()->user()->id)->update($dataInput);
            } else { // ga ada, isi

                $dataInput['user_id'] = auth()->user()->id;
                $dataInput['trials'] = 0;
                $dataInput['total'] = 0;
                //isi ke database
                TwoTrial::create($dataInput);
            }
        }

        if ($id == 100) {
            return redirect('home/trials-2/begin?page=' . $id)->with('success', 'Soal sebelumnya sudah terisi!');
        } else {
            return redirect('home/trials-2/begin?page=' . $id + 2)->with('success', 'Soal sebelumnya sudah terisi!');
        }
    }
}

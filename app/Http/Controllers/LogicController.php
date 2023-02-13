<?php

namespace App\Http\Controllers;

use App\Models\DataLogic;
use App\Models\Logic;
use Illuminate\Http\Request;

class LogicController extends Controller
{

    public function index() {
        $data = DataLogic::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.logics.index', [
            "title" => "Tes Berpikir Logis",
            "header" => "Pendahuluan Tes Berpikir Logis",
            "done" => $done
        ]);
    }

    public function show() {
        $data = DataLogic::firstWhere('user_id', auth()->user()->id);
        $logics = Logic::paginate(1)->withQueryString();
        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        }else {
            $done = false;
        }
        return view('home.logics.show', [
            "title" => "Tes Berpikir Logis",
            "header" => "Tes Berpikir Logis",
            "logics" => $logics,
            "data" => $data,
            "done" => $done
        ]);
    }

    public function store(Request $request) {

        $no = $request->no;
        $answer1 = $request->answer1;
        $answer2 = $request->answer2;

        $data = DataLogic::firstWhere('user_id', auth()->user()->id);

        if($no == 9 || $no == 10) {
            $validated = $request->validate([
                'answerText' => 'required',
            ]);


            if ($validated['answerText'] == $answer1) {
                if ($data) {
                    // kalo ada datanya, update
                    $dataInput['logic_' . $no] = 1;
                    //update ke database
                    DataLogic::where('user_id', auth()->user()->id)->update($dataInput);
                } else {
                    // ga ada, isi
                    $dataInput['user_id'] = auth()->user()->id;
                    $dataInput['logic_' . $no] = 1;
                    //isi ke database
                    DataLogic::create($dataInput);
                }
            } else {
                if ($data) {
                    // kalo ada datanya, update
                    $dataInput['logic_' . $no] = 0;
                    //update ke database
                    DataLogic::where('user_id', auth()->user()->id)->update($dataInput);
                } else {
                    // ga ada, isi
                    $dataInput['user_id'] = auth()->user()->id;
                    $dataInput['logic_' . $no] = 0;
                    //isi ke database
                    DataLogic::create($dataInput);
                }
            }
        }else{
            $validated = $request->validate([
                'answerOption' => 'required',
                'answerReason' => 'required',
            ]);

            if ($validated['answerOption'] == $answer1 && $validated['answerReason'] == $answer2) {
                if ($data) {
                    // kalo ada datanya, update
                    $dataInput['logic_' . $no] = 1;
                    //update ke database
                    DataLogic::where('user_id', auth()->user()->id)->update($dataInput);
                } else {
                    // ga ada, isi
                    $dataInput['user_id'] = auth()->user()->id;
                    $dataInput['logic_' . $no] = 1;
                    //isi ke database
                    DataLogic::create($dataInput);
                }
            } else {
                if ($data) {
                    // kalo ada datanya, update
                    $dataInput['logic_' . $no] = 0;
                    //update ke database
                    DataLogic::where('user_id', auth()->user()->id)->update($dataInput);
                } else {
                    // ga ada, isi
                    $dataInput['user_id'] = auth()->user()->id;
                    $dataInput['logic_' . $no] = 0;
                    //isi ke database
                    DataLogic::create($dataInput);
                }
            }
        }


        //selesai, kasih alert berhasil submit, lanjutkan ke nomor berikutnya.
        if ($no == 10) {
            return redirect('home/logics/begin?page=' . $no)->with('success', 'Nomor ' . $no . ' sudah terisi!');
        } else {
            return redirect('home/logics/begin?page=' . $no + 1)->with('success', 'Nomor ' . $no . ' sudah terisi!');
        }
    }

    public function score() {
        $data = DataLogic::firstWhere('user_id', auth()->user()->id);
        if ($data && $data->sum === null) {
            $sum = 0;
            for ($i=1; $i < 11; $i++) { 
                $val = $data['logic_' . $i];
                $done = true;
                if ($val === null) {
                    $done = false;
                }
                $sum = $sum + $val;
            }
    
            if ($done) {
                $dataInput['sum'] = $sum;
                //update ke database
                $data->update($dataInput);
            }
        }elseif ($data && $data->sum !== null) {
            $done = true;
        }else {
            $done = false;
        }

        return view('home.logics.score', [
            "title" => "Tes Berpikir Logis",
            "header" => "Penilaian Tes Berpikir Logis",
            "data" => $data,
            "done" => $done
        ]);
    }

    
}

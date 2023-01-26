<?php

namespace App\Http\Controllers;

use App\Models\DataLogic;
use App\Models\Logic;
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


class LogicController extends Controller
{

    public function index() {
        return view('home.logics.index', [
            "title" => "Tes Berpikir Logis",
            "header" => "Tes Berpikir Logis",
            "logics" => true
        ]);
    }

    public function exone(Request $request) {
        $output = execute($request);
        return redirect()->back()->with('output', $output);
        
    }

    public function indextwo() {
        return view('home.logics.indextwo', [
            "title" => "Tes Berpikir Logis",
            "header" => "Tes Berpikir Logis",
            "logics" => true
        ]);
    }

    public function show() {
        $logics = Logic::paginate(1)->withQueryString();
        $data = DataLogic::firstWhere('user_id', auth()->user()->id);
        return view('home.logics.show', [
            "title" => "Tes Berpikir Logis",
            "header" => "Tes Berpikir Logis",
            "logics" => $logics,
            "data_l" => $data
        ]);
    }

    public function store(Request $request) {

        $type = $request->type;
        $answer = $request->answer;
        $no = $request->no;
        $code = $request->code;
        
        $data = DataLogic::firstWhere('user_id', auth()->user()->id);

        if (str_contains($code, $type)) {
            $output = execute($request);

            if (preg_match("/$answer/", $output)) {

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

            }else {

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

        //selesai, kasih alert berhasil submit, lanjutkan ke nomor berikutnya.
        if ($no == 10) {
            return redirect('home/logics/begin?page=' . $no)->with('success', 'Nomor ' . $no . ' sudah terisi!');
        } else {
            return redirect('home/logics/begin?page=' . $no + 1)->with('success', 'Nomor ' . $no . ' sudah terisi!');
        }
    }

    public function score() {
        $data = DataLogic::firstWhere('user_id', auth()->user()->id);
        $sum = 0;
        for ($i=1; $i < 11; $i++) { 
            $val = $data['logic_' . $i];
            $sum = $sum + $val;
        }

        $dataInput['sum'] = $sum;
        //update ke database
        $data->update($dataInput);

        return view('home.logics.score', [
            "title" => "Tes Berpikir Logis",
            "header" => "Penilaian Tes Berpikir Logis",
            "empty" => false
        ]);
    }

    
}

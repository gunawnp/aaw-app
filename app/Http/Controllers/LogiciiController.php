<?php

namespace App\Http\Controllers;

use App\Models\DataLogicii;
use App\Models\Logic;
use Illuminate\Http\Request;

function executee(Request $request)
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


class LogiciiController extends Controller
{

    public function index()
    {
        $data = DataLogicii::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.logicsii.index', [
            "title" => "Tes Berpikir Logis",
            "header" => "Pendahuluan Tes Berpikir Logis",
            "data" => $data,
            "done" => $done
        ]);
    }

    public function exone(Request $request)
    {
        $output = executee($request);
        return redirect()->back()->with('output', $output);
    }

    public function indextwo()
    {
        $data = DataLogicii::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.logicsii.indextwo', [
            "title" => "Tes Berpikir Logis",
            "header" => "Pendahuluan Tes Berpikir Logis",
            "data" => $data,
            "done" => $done
        ]);
    }

    public function show()
    {
        $data = DataLogicii::firstWhere('user_id', auth()->user()->id);
        $logics = Logic::paginate(1)->withQueryString();
        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }
        return view('home.logicsii.show', [
            "title" => "Tes Berpikir Logis",
            "header" => "Tes Berpikir Logis",
            "logics" => $logics,
            "data" => $data,
            "done" => $done
        ]);
    }

    public function store(Request $request)
    {

        $type = $request->type;
        $answer = $request->answer;
        $no = $request->no;
        $code = $request->code;

        $data = DataLogicii::firstWhere('user_id', auth()->user()->id);

        if (str_contains($code, $type)) {
            $output = execute($request);

            if (preg_match("/$answer/", $output)) {

                if ($data) {
                    // kalo ada datanya, update
                    $dataInput['logic_' . $no] = 1;
                    //update ke database
                    DataLogicii::where('user_id', auth()->user()->id)->update($dataInput);
                } else {
                    // ga ada, isi
                    $dataInput['user_id'] = auth()->user()->id;
                    $dataInput['logic_' . $no] = 1;
                    //isi ke database
                    DataLogicii::create($dataInput);
                }
            } else {

                if ($data) {
                    // kalo ada datanya, update
                    $dataInput['logic_' . $no] = 0;
                    //update ke database
                    DataLogicii::where('user_id', auth()->user()->id)->update($dataInput);
                } else {
                    // ga ada, isi
                    $dataInput['user_id'] = auth()->user()->id;
                    $dataInput['logic_' . $no] = 0;
                    //isi ke database
                    DataLogicii::create($dataInput);
                }
            }
        } else {

            if ($data) {
                // kalo ada datanya, update
                $dataInput['logic_' . $no] = 0;
                //update ke database
                DataLogicii::where('user_id', auth()->user()->id)->update($dataInput);
            } else {
                // ga ada, isi
                $dataInput['user_id'] = auth()->user()->id;
                $dataInput['logic_' . $no] = 0;
                //isi ke database
                DataLogicii::create($dataInput);
            }
        }

        //selesai, kasih alert berhasil submit, lanjutkan ke nomor berikutnya.
        if ($no == 10) {
            return redirect('home/logicsii/begin?page=' . $no)->with('success', 'Nomor ' . $no . ' sudah terisi!');
        } else {
            return redirect('home/logicsii/begin?page=' . $no + 1)->with('success', 'Nomor ' . $no . ' sudah terisi!');
        }
    }

    public function score()
    {
        $data = DataLogicii::firstWhere('user_id', auth()->user()->id);
        if ($data && $data->sum === null) {
            $sum = 0;
            for ($i = 1; $i < 11; $i++) {
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
        } elseif ($data && $data->sum !== null) {
            $done = true;
        } else {
            $done = false;
        }

        return view('home.logicsii.score', [
            "title" => "Tes Berpikir Logis",
            "header" => "Penilaian Tes Berpikir Logis",
            "data" => $data,
            "done" => $done
        ]);
    }
}

<?php

namespace App\Http\Controllers;

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

class PretestController extends Controller
{
    public function index()
    {
        // $data = DataLogic::firstWhere('user_id', auth()->user()->id);

        // if ($data) {
        //     $done = true;
        //     if ($data->sum === null) {
        //         $done = false;
        //     }
        // } else {
        //     $done = false;
        // }

        return view('home.pretest.index', [
            "title" => "Pretest Asesmen Adaptif",
            "header" => "Pendahuluan Asesmen Adaptif",
            // "data" => $data,
            // "done" => $done
        ]);
    }

    public function exone(Request $request)
    {
        $output = execute($request);
        return redirect()->back()->with('output', $output);
    }

    public function show()
    {
        // $data = DataLogic::firstWhere('user_id', auth()->user()->id);
        // $logics = Logic::paginate(1)->withQueryString();
        // if ($data) {
        //     $done = true;
        //     if ($data->sum === null) {
        //         $done = false;
        //     }
        // } else {
        //     $done = false;
        // }
        return view('home.pretest.show', [
            "title" => "Pretest Asesmen Adaptif",
            "header" => "Pretest Asesmen Adaptif",
            // "logics" => $logics,
            // "data" => $data,
            // "done" => $done
        ]);
    }
}

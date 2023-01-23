<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

function execute(Request $request)
{
    $validatedData = $request->validate([
        'code' => [
            'required',
            'string',
            'max:2000',
            Rule::notIn(['system', 'exec', 'passthru', 'shell_exec', 'proc_open', 'popen']),
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
        $output = 'Error';
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
        return view('home.logics.show', [
            "title" => "Tes Berpikir Logis",
            "header" => "Tes Berpikir Logis",
            "logics" => true
        ]);
    }

    
}

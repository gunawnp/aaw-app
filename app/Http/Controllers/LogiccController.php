<?php

namespace App\Http\Controllers;

use App\Models\Logicc;
use App\Models\DataLogicc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogiccController extends Controller
{
    public function index()
    {
        $data = DataLogicc::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            $done = true;
            if ($data->sum === null) {
                $done = false;
            }
        } else {
            $done = false;
        }

        return view('home.logiccs.index', [
            "title" => "Tes Berpikir Logis 2",
            "header" => "Pendahuluan Tes Berpikir Logis 2",
            "done" => $done
        ]);
    }

    public function show()
    {
        $data = DataLogicc::firstWhere('user_id', auth()->user()->id);
        $logics = Logicc::all();
        if ($data) {
            $done = true;
            if ($data->counter === null) {
                $done = false;
            }
        } else {
            $done = false;
        }
        return view('home.logiccs.show', [
            "title" => "Tes Berpikir Logis 2",
            "header" => "Tes Berpikir Logis 2",
            "logics" => $logics,
            "data" => $data,
            "done" => $done
        ]);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'store_1' => 'required',
            'store_2' => 'required',
            'store_3' => 'required',
            'store_4' => 'required',
            'store_5' => 'required',
            'store_6' => 'required',
            'store_7' => 'required',
            'store_8' => 'required',
            'store_9' => 'required',
            'store_10' => 'required',
            'store_11' => 'required',
            'store_12' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['counter'] = 1;

        DataLogicc::create($validatedData);

        return redirect()->back();
    }
    
}

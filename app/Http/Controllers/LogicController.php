<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function index() {
        return view('home.logics.index', [
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

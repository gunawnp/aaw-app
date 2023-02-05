<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index() {
        return view('home.materi.index', [
            "title" => "Materi",
            "header" => "Materi Pembelajaran",
        ]);
    }

    public function nest() {
        return view('home.materi.nest', [
            "title" => "Materi",
            "header" => "Materi Pembelajaran",
        ]);
    }

    public function loop() {
        return view('home.materi.loop', [
            "title" => "Materi",
            "header" => "Materi Pembelajaran",
        ]);
    }
}

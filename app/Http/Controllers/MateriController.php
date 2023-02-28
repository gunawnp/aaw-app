<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Exercisee;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index() {
        return view('home.materi.index', [
            "title" => "Materi",
            "header" => "Materi Pembelajaran",
        ]);
    }

    // -------

    public function nest() {
        return view('home.materi.nest', [
            "title" => "Materi",
            "header" => "Materi Pembelajaran Percabangan",
        ]);
    }
    
    public function exercise() {
        $data = Exercise::firstWhere('user_id', auth()->user()->id);
        return view('home.materi.nestexe', [
            "title" => "Materi",
            "header" => "Halaman Kerja Materi Percabangan",
            "data" => $data
        ]);
    }

    public function store(Request $request) {
        $validation = $request->validate([
            'exercise1' => 'required',
            'exercise2' => 'required',
            'exercise3' => 'required',
            'exercise4' => 'required',
            'exercise5' => 'required',
        ]);

        $data = Exercise::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            Exercise::where('user_id', auth()->user()->id)->delete();
        }

        $validation['user_id'] = auth()->user()->id;
        Exercise::create($validation);

        return redirect('home/materi/percabangan/exercise')->with('success');
    }

    // -------

    public function loop() {
        return view('home.materi.loop', [
            "title" => "Materi",
            "header" => "Materi Pembelajaran Perulangan",
        ]);
    }

    public function exercisee()
    {
        $data = Exercisee::firstWhere('user_id', auth()->user()->id);
        return view('home.materi.loopexe', [
            "title" => "Materi",
            "header" => "Halaman Kerja Materi Perulangan",
            "data" => $data
        ]);
    }

    public function storee(Request $request)
    {

        $validation = $request->validate([
            'exercise1' => 'required',
            'exercise2' => 'required',
            'exercise3' => 'required',
            'exercise4' => 'required',
        ]);

        $data = Exercisee::firstWhere('user_id', auth()->user()->id);

        if ($data) {
            Exercisee::where('user_id', auth()->user()->id)->delete();
        }

        $validation['user_id'] = auth()->user()->id;
        Exercisee::create($validation);

        return redirect('home/materi/perulangan/exercise')->with('success');
    }
}

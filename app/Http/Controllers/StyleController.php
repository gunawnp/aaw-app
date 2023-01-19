<?php

namespace App\Http\Controllers;

use App\Models\DataStyle;
use App\Models\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index() {
        $data = DataStyle::firstWhere('user_id', auth()->user()->id);
        if ($data) {
            $styles = false;
        } else {
            $styles = true;
        }
        return view('home.styles.index', [
            "title" => "Tes Gaya Belajar",
            "header" => "Kuesioner Gaya Belajar Kolb",
            "styles" => $styles
        ]);
    }

    public function show() {
        $data = DataStyle::firstWhere('user_id', auth()->user()->id);
        if($data){
            $styles = false;
        }else {
            $styles = Style::all();
        }

        return view('home.styles.show', [
            "title" => "Tes Gaya Belajar",
            "header" => "Kuesioner Gaya Belajar Kolb",
            "styles" => $styles
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'dataStyle' => 'required|min:20',
        ]);

        $validatedData['style'] = implode(",", $validatedData['dataStyle']);
        $validatedData['user_id'] = auth()->user()->id;

       
        DataStyle::create($validatedData);

        return redirect('/home/styles/score')->with('success', 'Tes telah selesai di isi, silahkan lihat nilai dan hasilnya!');
    }

    public function score() {

        $data = DataStyle::firstWhere('user_id', auth()->user()->id);
        if ($data) {
            $dataStyle = explode(',', $data->style);
            
            $dataPreference = Style::first();
            $activist = collect(explode(',', $dataPreference['activist']));
            $reflector = collect(explode(',', $dataPreference['reflector']));
            $theorist = collect(explode(',', $dataPreference['theorist']));
            $pragmatist = collect(explode(',', $dataPreference['pragmatist']));

            $dataAct = collect([]);
            $dataRef = collect([]);
            $dataThe = collect([]);
            $dataPra = collect([]);

            $countA = 0;
            $countR = 0;
            $countT = 0;
            $countP = 0;

            foreach ($dataStyle as $ds) {
                if($activist->contains($ds)) {
                    $dataAct->push($ds);
                    $countA++;
                }
                if($reflector->contains($ds)) {
                    $dataRef->push($ds);
                    $countR++;
                }
                if($theorist->contains($ds)) {
                    $dataThe->push($ds);
                    $countT++;
                }
                if($pragmatist->contains($ds)) {
                    $dataPra->push($ds);
                    $countP++;
                }
            }

            $countData = collect([
                'Activist' => $countA,
                'Reflector' => $countR,
                'Theorist' => $countT,
                'Pragmatist' => $countP
            ]);

            if($data->preference == null){
                $countDatapush = implode(",", $countData->all());
                $cdp['preference'] = $countDatapush;
                DataStyle::where('user_id', auth()->user()->id)->update($cdp);
            }

            $sum = 20 - $countA;
            for ($i=0; $i < $sum; $i++) {
                $dataAct->push("-");
            }

            $sum = 20 - $countR;
            for ($i=0; $i < $sum; $i++) {
                $dataRef->push("-");
            }

            $sum = 20 - $countT;
            for ($i=0; $i < $sum; $i++) {
                $dataThe->push("-");
            }

            $sum = 20 - $countP;
            for ($i=0; $i < $sum; $i++) {
                $dataPra->push("-");
            }

            $dataValue = [$activist, $reflector, $theorist, $pragmatist];
            $dataInclude = [$dataAct, $dataRef, $dataThe, $dataPra];

            return view('home.styles.score', [
                "title" => "Tes Gaya Belajar",
                "header" => "Penilaian Tes Gaya Belajar Kolb",
                "datavalue" => $dataValue,
                "datainclude" => $dataInclude,
                "countdata" => $countData,
                "empty" => false
            ]);

        } else {
            return view('home.styles.score', [
                "title" => "Tes Gaya Belajar",
                "header" => "Penilaian Tes Gaya Belajar Kolb",
                "empty" => true
            ]);
        }
        
    }

    public function pref() {
        $data = DataStyle::firstWhere('user_id', auth()->user()->id);
        if ($data) {
            $pref = explode(",", $data->preference);

            $vs = collect([]);
            $s = collect([]);
            $m = collect([]);
            $l = collect([]);
            $vl = collect([]);

            if ($pref[0] < 4) {
                $vl->push("Activist");
            } elseif ($pref[0] < 7) {
                $l->push("Activist");
            } elseif ($pref[0] < 11) {
                $m->push("Activist");
            } elseif ($pref[0] < 13) {
                $s->push("Activist");
            } elseif ($pref[0] < 21) {
                $vs->push("Activist");
            }

            if ($pref[1] < 9) {
                $vl->push("Reflector");
            } elseif ($pref[1] < 12) {
                $l->push("Reflector");
            } elseif ($pref[1] < 15) {
                $m->push("Reflector");
            } elseif ($pref[1] < 18) {
                $s->push("Reflector");
            } elseif ($pref[1] < 21) {
                $vs->push("Reflector");
            }

            if ($pref[2] < 8) {
                $vl->push("Theorist");
            } elseif ($pref[2] < 11) {
                $l->push("Theorist");
            } elseif ($pref[2] < 14) {
                $m->push("Theorist");
            } elseif ($pref[2] < 16) {
                $s->push("Theorist");
            } elseif ($pref[2] < 21) {
                $vs->push("Theorist");
            }

            if ($pref[3] < 9) {
                $vl->push("Pragmatist");
            } elseif ($pref[3] < 12) {
                $l->push("Pragmatist");
            } elseif ($pref[3] < 15) {
                $m->push("Pragmatist");
            } elseif ($pref[3] < 17) {
                $s->push("Pragmatist");
            } elseif ($pref[3] < 21) {
                $vs->push("Pragmatist");
            }

            if ($data->learning_s == null) {
                $cekMax = [$vs, $s, $m, $l, $vl];
                if ($cekMax[0]->isNotEmpty()) {
                    $ls = $cekMax[0][0];
                } elseif ($cekMax[1]->isNotEmpty()) {
                    $ls = $cekMax[1][0];
                } elseif ($cekMax[2]->isNotEmpty()) {
                    $ls = $cekMax[2][0];
                } elseif ($cekMax[3]->isNotEmpty()) {
                    $ls = $cekMax[3][0];
                } elseif ($cekMax[4]->isNotEmpty()) {
                    $ls = $cekMax[4][0];
                }

                // lakukan konversi dari pref ke learning style
                if ($ls == "Activist") {
                    $ls = "Divergers";
                } elseif ($ls == "Reflector") {
                    $ls = "Assimilators";
                } elseif ($ls == "Theorist") {
                    $ls = "Convergers";
                } elseif ($ls == "Pragmatist") {
                    $ls = "Accomodators";
                }
                
                // input gaya belajar ke database dengan atribut learning_s
                $val['learning_s'] = $ls;
                DataStyle::where('user_id', auth()->user()->id)->update($val);
            }

            $vs = implode(", ", $vs->all());
            $s = implode(", ", $s->all());
            $m = implode(", ", $m->all());
            $l = implode(", ", $l->all());
            $vl = implode(", ", $vl->all());

            $strenght = [$vl,$l,$m,$s,$vs];

        } else {
            $pref = false;
            $strenght = false;
        }
        
        return view('home.styles.pref', [
            "title" => "Tes Gaya Belajar",
            "header" => "Penilaian Tes Gaya Belajar Kolb",
            "pref" => $pref,
            "str" => $strenght
        ]);
    }

    public function result() {
        $data = DataStyle::firstWhere('user_id', auth()->user()->id);
        $style = Style::get()->all();
        if ($data) {
            $learning_s = $data->learning_s;
        }else{
            $learning_s = false;
        }

        return view('home.styles.result', [
            "title" => "Tes Gaya Belajar",
            "header" => "Hasil Tes Gaya Belajar Kolb",
            "learning_s" => $learning_s,
            "style" => $style
        ]);
    }
}

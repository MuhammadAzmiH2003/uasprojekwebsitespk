<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalisaController extends Controller
{
    public function analisis()
    {

        $alternatif = DB::table('alternatif')->select()->get();
        $alt = DB::table('alternatif')->select('c1', 'c2', 'c3', 'c4', 'c5')->get();
        $altn = DB::table('alternatif')->select('nama')->get();
        $kriteria = DB::table('kriteria')->select()->get();
        $kcount = kriteria::count();
        $altcount = alternatif::count();
        $bobot = DB::table('kriteria')->select('bobot')->get();
        $tkep = 0;
        $tbkep = 0;
        $cb = DB::table('kriteria')->select('sifat')->get();

        foreach ($altn as $key => $value) { //return nama alternatif ke array
            foreach ($value as $v) {

                $alt_name[$key] = $v;

            }

        }
        foreach ($bobot as $nama => $value) { // jumlah kepentingan kriteria
            foreach ($value as $isi) {

                $tkep = $tkep + $isi;
            }

        }

        foreach ($bobot as $nama => $value) { //hasil pembagian kriteria
            foreach ($value as $v) {

                $bkep[$nama] = ($v / $tkep);

            }
        }


        foreach ($cb as $nama => $isi) { // menentukan pangkat
            if ($isi == "COST") {
                $pangkat[$nama] = (-1) * $bkep[$nama];
            } else {
                $pangkat[$nama] = $bkep[$nama];
            }

        }
        // dd($pangkat[0]);

        foreach ($alt as $nama => $isi) {
            $i = 0;
            foreach ($isi as $v) { // operasi pemangkatan
                $s[$nama][$i] = pow($v, $pangkat[$nama]);

                $i++;
            }
            // dd($s[1][1]);
            $ss[$nama] = $s[$nama][0] * $s[$nama][1] * $s[$nama][2] * $s[$nama][3] * $s[$nama][4]; // hasil setelah di pangkatkan dan di kalikan
        }
        // dd($ss);

        $total = 0;
        foreach ($ss as $key => $v) { //menghitung Total

            $total = $total + $ss[$key];
        }

        //  dd($ss);
        foreach ($ss as $key => $value) { //membagi dengan total

            $vs[$key] = $ss[$key] / $total;

        }

        foreach($vs as $key =>$value){
            // dd($value);
            $res[$key] = [
                'id_alternatif' => $key + 1,
                'alternatif' => $alt_name[$key],
                'hasil' => $value
            ];
        }
        // dd($res);
        DB::table('hasil')->truncate();
        DB::table('hasil')->insert($res);
            // dd($vs);

        $sorted = DB::table('hasil')->orderBy('hasil','desc')->get();


        return view('analisa', compact('alternatif', 'kriteria', 'altcount', 'kcount', 'ss', 'alt_name', 'vs','res','sorted'));
    }

    // public function fix()
    // {
    //
    //     $alternatif = DB::table('alternatif')->select('k1', 'k2', 'k3', 'k4', 'k5')->get();
    //     $kriteria = DB::table('kriteria')->select('kepentingan')->get();
    //
    //     $wp = new Wp($alternatif, $kriteria);
    //     $hasil = $wp->make();
    //
    //     foreach ($hasil as $key => $value) {
    //
    //         $res[$key] = [
    //             'id' => $key + 1,
    //             'hasil' => $value,
    //         ];
    //
    //     }
    //
    //     DB::table('hasil')->insert($res);
    //
    //     return view('analisa', compact('res'));
    // }

    public function returnPerhitungan(){

        return view('perhitungan', compact('alternatif', 'kriteria', 'altcount', 'kcount', 'ss', 'alt_name', 'vs','res','sorted'));
    }
}

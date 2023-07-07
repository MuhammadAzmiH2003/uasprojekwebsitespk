<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kriteria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class KriteriaupdateController extends Controller
{
    public function index()
    {
        
        // mengambil data dari table kriteria
    	$kriteria = DB::table('kriteria')->simplepaginate(5);

        return view('Dashboard.kriteriaupdate',['kriteria' => $kriteria]);

    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('Dashboard.kriteriatambah');
    }

    public function store(Request $request)

    {
        $validator = $request -> validate([
            'kriteria' => 'required',
            'sifat' => 'required',
            'bobot' => 'required',
        ], 
        [
            "kriteria.required" => "Please enter kriteria",
            "sifat.required" => "Please enter sifat",
            "bobot.required" => "Please enter bobot",
           
        ]);


        $kriteria = new Kriteria;
        $kriteria->kriteria= $request->input('kriteria');
        $kriteria->sifat= $request->input('sifat');
        $kriteria->bobot= $request->input('bobot');
       
        $kriteria->save();

        return redirect('/kriteriaupdate')-> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data kriteria
    public function edit($id)
    {
         $kriteria = Kriteria:: find($id);

        return view('Dashboard.kriteriaedit', [
            'method'=> "PUT",
            'action'=> "/kriteriaupdate/edit/{id}",
            'kriteria'=> $kriteria
        ]);
    }


    // update data kriteria
    public function update(Request $request,$id)
    {
        $kriteria = Kriteria::find($id); 
            
        $validator = $request -> validate([
        'kriteria' => 'required',
        'sifat' => 'required',
        'bobot' => 'required',
          
        ],
        [
            "kriteria.required" => "Please enter kriteria",
            "sifat.required" => "Please enter sifat",
            "bobot.required" => "Please enter bobot",
            
        ]);

        $kriteria->kriteria = $request->kriteria;
        $kriteria->sifat = $request->sifat;
        $kriteria->bobot = $request->bobot;
        
        $kriteria->save();

        return redirect('kriteriaupdate')->with('toast_success','Data Telah Diupdate');
    }

    // method untuk hapus alternatif
    public function hapus($id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->delete();
        
        return back()-> with('toast_info', "Data berhasil dihapus!");
    }




}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\penilaian;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PenilaianupdateController extends Controller
{
    public function index()
    {   
        // mengambil data dari table penilaian
    	$penilaian = DB::table('penilaian')->simplepaginate(5);

        return view('Dashboard.penilaianupdate',['penilaian' => $penilaian]);

    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('Dashboard.penilaiantambah');
    }

    public function store(Request $request)

    {
        $validator = $request -> validate([
            'nama' => 'required',
            'harga' => 'required',
            'gizi' => 'required',
            'gula' => 'required',
            'lemak' => 'required',
            'kadalwarsa' => 'required',
        ], 
        [
            "nama.required" => "Please enter nama produk",
            "harga.required" => "Please enter harga",
            "gizi.required" => "Please enter kandungan gizi",
            "gula.required" => "Please enter kandungan gula",
            "lemak.required" => "Please enter kandungan lemak",
            "kadalwarsa.required" => "Please enter tanggal kadalwarsa",
           
        ]);


        $penilaian = new Penilaian;
        $penilaian->nama= $request->input('nama');
        $penilaian->harga= $request->input('harga');
        $penilaian->gizi= $request->input('gizi');
        $penilaian->gula= $request->input('gula');
        $penilaian->lemak= $request->input('lemak');
        $penilaian->kadalwarsa= $request->input('kadalwarsa');
       
        $penilaian->save();

        return redirect('/penilaianupdate')-> with('success', "Data berhasil ditambahkan!");
    }

    
    // method untuk edit data penilaian
    public function edit($id)
    {
         $penilaian = Penilaian:: find($id);

        return view('Dashboard.penilaianedit', [
            'method'=> "PUT",
            'action'=> "/penilaianupdate/edit/{id}",
            'penilaian'=> $penilaian
        ]);
    }

    // update data penilaian
    public function update(Request $request,$id)
    {
        $penilaian = Penilaian::find($id); 
            
        $validator = $request -> validate([
        'nama' => 'required',
        'harga' => 'required',
        'gizi' => 'required',
        'gula' => 'required',
        'lemak' => 'required',
        'kadalwarsa' => 'required',
          
        ],
        [
            "nama.required" => "Please enter nama produk",
            "harga.required" => "Please enter harga",
            "gizi.required" => "Please enter kandungan gizi",
            "gula.required" => "Please enter kandungan gula",
            "lemak.required" => "Please enter kandungan lemak",
            "kadalwarsa.required" => "Please enter tanggal kadalwarsa",
        ]);

        $penilaian->nama = $request->nama;
        $penilaian->harga = $request->harga;
        $penilaian->gizi = $request->gizi;
        $penilaian->gula = $request->gula;
        $penilaian->lemak = $request->lemak;
        $penilaian->kadalwarsa = $request->kadalwarsa;
        
        $penilaian->save();

        return redirect('penilaianupdate')->with('toast_success','Data Telah Diupdate');
    }

    // method untuk hapus penilaian
    public function hapus($id)
    {
        $penilaian = Penilaian::find($id);
        $penilaian->delete();
        
        return back()-> with('toast_info', "Data berhasil dihapus!");
    }







}

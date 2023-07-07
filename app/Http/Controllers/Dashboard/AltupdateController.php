<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\alternatif;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AltupdateController extends Controller
{
    public function index()
    {   
        // mengambil data dari table alternatif
    	$alternatif = DB::table('alternatif')->simplepaginate(5);

        return view('Dashboard.altupdate',['alternatif' => $alternatif]);
    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('Dashboard.alttambah');
    }

    public function store(Request $request)

    {
        $validator = $request -> validate([
            'nama' => 'required',
            'c1' => 'required',
            'c2' => 'required',
            'c3' => 'required',
            'c4' => 'required',
            'c5' => 'required',
        ], 
        [
            "nama.required" => "Please enter nama produk",
            "jenis.required" => "Please enter jenis susu",
           
        ]);


        $alternatif = new Alternatif;
        $alternatif->nama= $request->input('nama');
        $alternatif->c1= $request->input('c1');
        $alternatif->c2= $request->input('c2');
        $alternatif->c3= $request->input('c3');
        $alternatif->c4= $request->input('c4');
        $alternatif->c5= $request->input('c5');
       
        $alternatif->save();

        return redirect('/altupdate')-> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data alternatif
    public function edit($id)
    {
         $alternatif = Alternatif:: find($id);

        return view('Dashboard.altedit', [
            'method'=> "PUT",
            'action'=> "/altupdate/edit/{id}",
            'alternatif'=> $alternatif
        ]);
    }

    // update data alternatif
    public function update(Request $request,$id)
    {
        $alternatif = Alternatif::find($id); 
            
        $validator = $request -> validate([
        'nama' => 'required',
        'c1' => 'required',
        'c2' => 'required',
        'c3' => 'required',
        'c4' => 'required',
        'c5' => 'required',
          
        ],
        [
            "nama.required" => "Please enter nama",
            "jenis.required" => "Please enter jenis",
            
        ]);

        $alternatif->nama = $request->nama;
        $alternatif->c1 = $request->c1;
        $alternatif->c2 = $request->c2;
        $alternatif->c3 = $request->c3;
        $alternatif->c4 = $request->c4;
        $alternatif->c5 = $request->c5;
        
        $alternatif->save();

        return redirect('altupdate')->with('toast_success','Data Telah Diupdate');
    }

   // method untuk hapus alternatif
    public function hapus($id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->delete();
        
        return back()-> with('toast_info', "Data berhasil dihapus!");
    }

}

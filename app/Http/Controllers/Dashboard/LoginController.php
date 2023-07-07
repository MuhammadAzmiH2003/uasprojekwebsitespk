<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function store(Request $request)

    {
        $validator = $request -> validate([
            'email' => 'required',
            'nama' => 'required',
            
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


}

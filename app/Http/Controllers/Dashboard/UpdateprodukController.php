<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UpdateprodukController extends Controller
{
    public function index()
    {
        
        // mengambil data dari table produk
    	$produk = DB::table('produk')->simplepaginate(5);

        return view('Dashboard.updateproduk',['produk' => $produk]);

    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('Dashboard.tambahproduk');
    }

    public function store(Request $request)

    {
        $validator = $request -> validate([
            'image' => 'required',
            'nama' => 'required',
            'thumnel' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg'
        ], 
        [
            "image.required" => "Please enter image",
            "nama.required" => "Please enter nama",
            "thumnel.required" => "Please enter thumnel",
            "deskripsi.required" => "Please enter deskripsi",
           
        ]);


        $produk = new Produk;
        $produk->image= $request->input('image');
        $produk->nama= $request->input('nama');
        $produk->thumnel= $request->input('thumnel');
        $produk->deskripsi= $request->input('deskripsi');
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->nama.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/produk/',$filename);
            $produk->image = $filename;
        }
       
        $produk->save();

        return redirect('/updateproduk')-> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data produk
    public function edit($id)
    {
         $produk = Produk:: find($id);

        return view('Dashboard.editproduk', [
            'method'=> "PUT",
            'action'=> "/updateproduk/edit/{id}",
            'produk'=> $produk
        ]);
    }


    // update data produk
    public function update(Request $request,$id)
    {
        $produk = Produk::find($id); 
            
        $validator = $request -> validate([
        'image' => 'required',
        'nama' => 'required',
        'thumnel' => 'required',
        'deskripsi' => 'required',
        'image' => 'image|file|max:2048,jpeg,png,jpg',
          
        ],
        [
            "image.required" => "Please enter image",
            "nama.required" => "Please enter nama",
            "thumnel.required" => "Please enter thumnel",
            "deskripsi.required" => "Please enter deskripsi",

            
            
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($produk->image);
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->nama.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/produk/',$filename);
            $produk->image = $filename;
        }

        $produk->image = $request->image;
        $produk->nama = $request->nama;
        $produk->thumnel = $request->thumnel;
        $produk->deskripsi = $request->deskripsi;
        
        $produk->save();

        return redirect('updateproduk')->with('toast_success','Data Telah Diupdate');
    }

    // method untuk hapus produk
    public function hapus($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        
        return back()-> with('toast_info', "Data berhasil dihapus!");
    }
    
    
}

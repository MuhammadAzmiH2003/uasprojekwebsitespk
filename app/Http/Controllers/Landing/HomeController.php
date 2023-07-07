<?php

namespace App\Http\Controllers\Landing;

use App\Models\produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $produk = DB::table('produk')->get();

        return view('landing.home',['produk'=> $produk]);
    }
}

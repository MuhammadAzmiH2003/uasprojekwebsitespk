<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Detailproduk1Controller extends Controller
{
    public function index()
    {
        return view('landing.detail-produk1');
    }
}

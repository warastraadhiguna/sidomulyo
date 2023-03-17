<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeProdukController extends Controller
{
    public function index()
    {
        return view('pages.produk');
    }
}
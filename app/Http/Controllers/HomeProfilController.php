<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeProfilController extends Controller
{
    public function index()
    {
        return view('pages.profil');
    }
}
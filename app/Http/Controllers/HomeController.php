<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function userHome()
    {
        $barang = Barang::all(); //retrieving models
        return view('welcome', ['barang' => $barang]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Barang;
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
        return view('user.userHome', ['barang' => $barang]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function detailBarang($ID_Barang)
    {
        $id = ['id' => $ID_Barang];
        return view('user.detailBarang', $id);
    }
}

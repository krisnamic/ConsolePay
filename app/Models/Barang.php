<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kategoriBarang',
        'merekBarang', 
        'namaBarang',
        'deskripsiBarang',
        'hargaBarang',
        'stokBarang',
        'gambarBarang',
        'logoBarang', 
    ];    
}
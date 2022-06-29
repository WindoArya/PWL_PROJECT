<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'Pelanggan';
    protected $primaryKey = 'kode_pelanggan';
    protected $fillable = ['kode_pelanggan', 'nama', 'no_telepon', 'alamat'];
}

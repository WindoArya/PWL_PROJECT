<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $table = 'Makanan';
    protected $primaryKey = 'kode_makanan';
    protected $fillable = ['kode_makanan', 'nama_makanan', 'harga_makanan', 'foto_makanan'];
}

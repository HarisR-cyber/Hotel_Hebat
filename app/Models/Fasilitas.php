<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasiliitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    protected $fillable = ['nama_fasilitas', 'keterangan'];
}

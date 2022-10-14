<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    // use HasFactory;
    protected $table = 'dosen';
    protected $fillable = ['nidn','nama_lengkap','email','tanggal_lahir','status','id_departemen','alamat'];

    function departemen()
    {
        return $this->belongsTo(\App\Models\Departemen::class, 'id_departemen', 'id')->withDefault(['nama_departemen'=>'Belum dipilih']);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    //
    protected $fillable = [
        'pelapor', 'image', 'kategori', 'alamat','deskripsi', 'status', 'solusi', 'tgl_kerja', 'tgl_selesai'
    ];
}

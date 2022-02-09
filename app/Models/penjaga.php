<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjaga extends Model
{
    use HasFactory;
    protected $fillable = ['kode_petugas', 'nama_petugas', 'alamat' . 'jk'];
    protected $visible = ['kode_petugas', 'nama_petugas', 'alamat' . 'jk'];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->belongsTo('App\Models\peminjaman', 'no_anggota');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;
    protected $table = "pinjam";
    protected $fillable = ['kode_register', 'kode_pinjam', 'tgl_pinjam' . 'tgl_kembali'];
    protected $visible = ['kode_register', 'kode_pinjam', 'tgl_pinjam' . 'tgl_kembali'];
    public $timestamps = true;

    public function buku()
    {
        return $this->belongsTo('App\Models\buku', 'kode_register');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjamen";
    protected $fillable = ['kode_pinjam', 'no_anggota', 'kode_petugas'];
    protected $visible = ['kode_pinjam', 'no_anggota', 'kode_petugas'];
    public $timestamps = true;
}

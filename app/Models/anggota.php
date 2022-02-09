<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $table = "anggotas";
    protected $fillable = ['no_anggota', 'nama', 'alamat'];
    protected $visible = ['no_anggota', 'nama', 'alamat'];
    public $timestamps = true;

    public function peminjamen()
    {
        return $this->belongsTo('App\Models\Peminjaman', 'no_anggota');
    }
}

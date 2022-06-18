<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;
    protected $table = "pinjamans";

    protected $fillable = ['anggota_id', 'jumlah', 'peminjam_id', 'jangka_waktu', 'bayar_perbulan', 'status'];
}

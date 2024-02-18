<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = 'absen';
    protected $fillable = [
        'id_anggota', 'keterangan'
    ];
    // protected $fillable = [
    //     'nama', 'tanggal', 'keterangan',
    // ];

    // // Contoh metode yang dapat Anda tambahkan sesuai kebutuhan
    // public function scopeAktif($query)
    // {
    //     return $query->where('status', 'aktif');
    // }

    // public function getTanggalAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d-m-Y');
    // }

    // Jika ada relasi dengan model lain, tambahkan di sini
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $fillable = [
        'nis', 'nama', 'foto', 'kelas', 'no_telp'
    ];
}

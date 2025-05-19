<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'no_sim',
        'jenis_sim',
        'alamat',
        'no_hp',
        'status',
        'tanggal_bergabung',
    ];
}

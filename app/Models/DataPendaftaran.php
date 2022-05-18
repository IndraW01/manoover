<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'no_identitas',
        'no_hp',
        'domisili',
        'kartu_identitas',
    ];
}

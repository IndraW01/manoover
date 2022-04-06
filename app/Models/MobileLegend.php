<?php

namespace App\Models;

use App\Enums\MobileLegendStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MobileLegend extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_tim',
        'nama_ketua_tim',
        'no_hp',
        'anggota1',
        'anggota2',
        'anggota3',
        'anggota4',
        'anggota5',
        'cadangan1',
        'kartu_identitas',
        'bukti_pembayaran',
        'status',
    ];

    // protected $casts = [
    //     'status' => MobileLegendStatus::class
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

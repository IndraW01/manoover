<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelTraits\SendMailTarit;
use App\Traits\ModelTraits\SendMailTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Valorant extends Model
{
    use HasFactory, SendMailTrait;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isRegistered()
    {
        $registerValorant = $this->whereUserId(Auth::id())->exists();
        if($registerValorant) {
            return true;
        }
    }

}

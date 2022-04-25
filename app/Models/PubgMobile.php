<?php

namespace App\Models;

use App\Models\User;
use App\Traits\ModelTraits\SendMailTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class PubgMobile extends Model
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
        $registerPubg = $this->whereUserId(Auth::id())->exists();
        if($registerPubg) {
            return true;
        }
    }
}

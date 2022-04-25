<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelTraits\SendMailTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Futsal extends Model
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
        'cadangan2',
        'cadangan3',
        'cadangan4',
        'cadangan5',
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
        $registerFutsal = $this->whereUserId(Auth::id())->exists();
        if($registerFutsal) {
            return true;
        }
    }
}

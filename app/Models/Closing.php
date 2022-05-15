<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelTraits\SendMailTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Closing extends Model
{
    use HasFactory, SendMailTrait;

    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'no_identitas',
        'no_hp',
        'kota',
        'tipe',
        'kode_unik',
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
        $registerClosing = $this->whereUserId(Auth::id())->exists();
        if($registerClosing) {
            return true;
        }
    }

}

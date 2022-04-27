<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelTraits\SendMailTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Band extends Model
{
    use HasFactory, SendMailTrait;

    protected $fillable = [
        'user_id',
        'nama_band',
        'id_line',
        'whatsapp',
        'bukti_pembayaran',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isRegistered()
    {
        $registerBand = $this->whereUserId(Auth::id())->exists();
        if($registerBand) {
            return true;
        }
    }
}

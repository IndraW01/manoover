<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'no_hp',
        'avatar',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mobileLegend()
    {
        return $this->hasOne(MobileLegend::class);
    }

    public function valorant()
    {
        return $this->hasOne(Valorant::class);
    }

    public function pubg()
    {
        return $this->hasOne(PubgMobile::class, 'user_id', 'id');
    }

    public function futsal()
    {
        return $this->hasOne(Futsal::class);
    }

    public function closing()
    {
        return $this->hasOne(Closing::class);
    }

    public function band()
    {
        return $this->hasOne(Band::class);
    }
}

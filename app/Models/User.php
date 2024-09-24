<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\spk;
use App\Models\sertifikat;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasMany;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'perawat';

    protected $fillable = [
        'Nopeg', // tambahkan kolom 'Nopeg'
        'password',
        'IJAZAH',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function spk()
    {
        return $this->hasOne(spk::class, 'id');
    }

    public function sertifikats()
    {
        return $this->hasMany(sertifikat::class, 'Nopeg', 'Nopeg');
    }

    
    
}

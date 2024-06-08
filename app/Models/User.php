<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userlevel() {
        return $this->belongsTo(Userlevel::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function karyawan() {
        return $this->belongsTo(Karyawan::class);
    }

    public function menutransaction() {
        return $this->hasMany(Menutransaction::class);
    }
}

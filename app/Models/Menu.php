<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function menucategory() {
        return $this->belongsTo(Menucategory::class);
    }

    public function submenu() {
        return $this->hasMany(Submenu::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function menutransaction() {
        return $this->hasMany(Menutransaction::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function menu() {
        return $this->belongsTo(Menu::class);
    }

    public function menutransaction() {
        return $this->hasMany(Menutransaction::class);
    }
}

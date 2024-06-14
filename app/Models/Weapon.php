<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    // $fillable = ['name','category','weight','cost', 'damage_dice'];



    public function characters()
    {
        return $this->belongsToMany(Character::class)->withPivot('quantity');
    }

}

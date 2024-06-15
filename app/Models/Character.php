<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name','genre','description','attack','defence','speed','life','type_id'];



    public function weapons(){
        return $this->belongsToMany(Weapon::class)->withPivot('quantity');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}





<?php

namespace App\Http\Controllers;
use App\Models\Weapon;

use Illuminate\Http\Request;

class WeaponPageController extends Controller
{
    //
    public function index(){
        
        $weapons=  Weapon::all();

        return view('weapons.index', compact('weapons'));
    }


    public function show(Weapon $weapon)
    {
       
        return view('weapons.show', compact('weapon'));
    }

    public function edit(Weapon $weapon){
        $weapons = Weapon::orderBy('name', 'asc')->get();
    
        return view('weapons.show', compact('weapons'));
    }
}




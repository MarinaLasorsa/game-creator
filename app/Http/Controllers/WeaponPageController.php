<?php

namespace App\Http\Controllers;
use App\Models\Weapon;

use Illuminate\Http\Request;

class WeaponPageController extends Controller
{
    //
    public function index(){
        $weapons=  Weapon::all();

        return view('index', compact('weapons'));
    }

}

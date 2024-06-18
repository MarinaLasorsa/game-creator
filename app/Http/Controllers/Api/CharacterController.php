<?php

namespace App\Http\Controllers\Api;
use App\Models\Character;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(){
        $pages =  8;
        $characters = Character::with('weapons','type')->paginate($pages);
        return response()->json([
            'characters' => $characters,
        ]);
    }
}

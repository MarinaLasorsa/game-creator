<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Weapon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();

        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::orderBy('name')->get();
        $weapons = Weapon::get();
        return view('admin.characters.create', compact('weapons', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {

        $form_data = $request->validated();

        $form_data = $request->all();



        $form_data['user_id'] = Auth::id();
        $new_character = Character::create($form_data);

        $weapons_with_qty = [];
        foreach ($request->weapons as $weapon_id => $quantity) {
            if ($quantity > 0) {
                $weapons_with_qty[$weapon_id + 1] = ['quantity' => $quantity];
            }
        }
        $new_character->weapons()->attach($weapons_with_qty);


        return to_route('admin.characters.show', $new_character);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        $character->load('weapons', 'users');
        return view('admin.characters.show', compact('character'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        if ($character->user_id === Auth::id()) {
            $types = Type::orderBy('name')->get();
            $weapons = Weapon::orderBy('name', 'asc')->get();
            return view('admin.characters.edit', compact('character', 'weapons', 'types'));
        } else {
            return to_route('admin.dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        /*$request->validate([
            'name'=> 'required|max:200|min:2',
            'description'=>'required|max:1000',
            'attack'=> 'required|integer',
            'defence'=> 'required|integer',
            'speed'=> 'required|integer',
            'life'=> 'required|integer',

        ]);*/

        $form_data = $request->validated();
        $form_data = $request->all();
        $character->fill($form_data);
        $character->save();

        //oppure - fa subito il fill()e il salvataggio- save()
        //$character->update();

        if ($request->has('weapons')) {
            $weapons_with_qty = [];
            foreach ($request->weapons as $weapon_id => $quantity) {
                if ($quantity > 0) {
                    $weapons_with_qty[$weapon_id] = ['quantity' => $quantity];
                }
            }
            $character->weapons()->sync($weapons_with_qty);
        } else {
            $character->weapons()->detach();
        }

        return to_route('admin.characters.show', $character);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return to_route('admin.characters.index');
    }

    public function toggleSelected(Character $character)
    {

        $user = User::find(Auth::user()->id);
        // dd($user);
        if ($user->character_id == $character->id) {
            $user->character_id = null;
        } else {
            $user->character_id = $character->id;
        }

        $user->update();

        //$character->attack = 800;
        // $character->update($character->toArray());
        //character->update();
        $character->load('weapons', 'users');

        return view('admin.characters.show', compact('character'));
    }
}

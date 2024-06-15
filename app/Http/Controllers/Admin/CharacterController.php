<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Weapon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Type;

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
        $weapons = Weapon::orderBy('name', 'asc')->get();
        return view('admin.characters.create', compact('weapons','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        /*$request->validate([
            'name'=> 'required|max:200|min:2',
            'description'=>'required|max:1000',
            'attack'=> 'required|integer',
            'defence'=> 'required|integer',
            'speed'=> 'required|integer',
            'life'=> 'required|integer',

        ]);*/
       // dd($request);
        $form_data = $request->validated();

        $form_data = $request->all();

        $new_character = Character::create($form_data);
        if ($request->has('weapons')) {

            $new_character->weapons()->attach($request->weapons);
        }

        return to_route('admin.characters.show', $new_character);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        $character->load('weapons');
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        $types = Type::orderBy('name')->get();   
        $weapons = Weapon::orderBy('name', 'asc')->get();
        return view('admin.characters.edit', compact('character', 'weapons','types'));
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

            $character->weapons()->sync($request->weapons);
        }else{
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
}

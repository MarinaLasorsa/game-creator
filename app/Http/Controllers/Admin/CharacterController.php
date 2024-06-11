<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        
        return view('admin.characters.index',compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.characters.create');
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

        $form_data = $request->validated();

        $form_data =$request->all();

        $new_character =  Character::create($form_data);

        return to_route('admin.characters.show', $new_character);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('admin.characters.edit', compact('character'));
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
        return to_route('admin.characters.show',$character);
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

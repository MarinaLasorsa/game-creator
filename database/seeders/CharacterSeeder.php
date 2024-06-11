<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Character;
use Faker\Generator as Faker;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    //    DB::table('characters')->truncate();
    { 

            $weapons_ids = Weapon::all()->pluck('id')->all();
            $types_ids= Type::all()->pluck('id')->all();


        for($i = 0; $i < 10; $i++){
            $new_character = new Character();
            
            $new_character->name = $faker->name();
            $new_character->description = $faker->sentence();
            $new_character->attack = $faker->randomNumber(3);
            $new_character->defence = $faker->randomNumber(3);
            $new_character->speed = $faker->randomNumber(3);
            $new_character->life = $faker->randomNumber(3);
            $new_character->type_id = $faker->randomElement($types_ids);

            $new_character->save();

            $random_weapon_ids = $faker->randomElements($weapons_ids, null);

            $weapons_with_random_qty = [];

            foreach ($random_weapon_ids as $random_weapon_id){
                $weapons_with_random_qty[$random_weapon_id] = ['quantity' => $faker->numberBetween(1,9)];
            }

            $new_character->weapons()->attach($weapons_with_random_qty);

        }
    }
}

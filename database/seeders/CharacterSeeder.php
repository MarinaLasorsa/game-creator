<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {    DB::table('characters')->truncate();
        for($i = 0; $i < 10; $i++){
            $new_character = new Character();
            $new_character->name = $faker->name();
            $new_character->description = $faker->sentence();
            $new_character->attack = $faker->randomNumber(3);
            $new_character->defence = $faker->randomNumber(3);
            $new_character->speed = $faker->randomNumber(3);
            $new_character->life = $faker->randomNumber(3);
            $new_character->save();

        }
    }
}

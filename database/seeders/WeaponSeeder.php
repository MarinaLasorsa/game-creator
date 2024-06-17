<?php

namespace Database\Seeders;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $data = $this->getCSVData(__DIR__ . '/items.csv');
        //    dump($data);

        foreach ($data as $index => $row) {
            if ($index !== 0) {
                $weapon = new Weapon();
                $weapon->name = $row[0];
                $weapon->slug = $row[1];
                $weapon->image = 'resources/img/weapons/'. $index +1 . '.png';
                $weapon->category = $row[3];
                $weapon->weight = $row[4];
                $weapon->cost = $row[5];
                $weapon->damage_dice = $row[6];
                $weapon->save();

            }
        }


    }

    public function getCSVData(string $path)
    {
        $data = [];

        $file_stream = fopen($path, 'r');

        if ($file_stream === false) {
            exit('Error ' . $path);
        }

        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }
        fclose($file_stream);
        return $data;
    }
}

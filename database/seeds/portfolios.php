<?php

use Illuminate\Database\Seeder;

class portfolios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for($i=1; $i<=10; $i++){
            array_push($data,[
                'type' => $faker->word,
                'description' => $faker->realText(100),
                'image' => $faker->imageUrl($width = 468, $height = 200),
            ]);
        }

        DB::table('portfolios')->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = User::pluck('id')->toArray();
        $data = [];
        for($i=1; $i<=10; $i++){
            array_push($data,[
                'titre' => $faker->Sentence,
                'description' => $faker->realText(200),
                'categorie' => $faker->word,
                'image' => $faker->imageUrl($width = 250, $height = 150),
                'date_publication' => $faker->dateTime(),
                'user_id' => $faker->randomElement($users),
                
            ]);
           
        }

        DB::table('posts')->insert($data);
    }
}

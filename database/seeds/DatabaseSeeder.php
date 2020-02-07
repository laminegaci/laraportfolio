<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(portfolios::class);
        $this->call(users::class);
        $this->call(posts::class);
      
        
    }
}

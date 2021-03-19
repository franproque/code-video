<?php

use Illuminate\Database\Seeder;
use App\Models\Movies;
use Illuminate\Support\Str;
class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        /*

        for ($i=1; $i<=4;$i++){
        
        Movies::create([
            "name"=>Str::random(20),
            "description"=>Str::random(50),
            "synopsis"=>Str::random(50),
            "id_genre"=>$i,
            "id_categoria"=>$i
        ]);
        }
        */

        factory(\App\Models\Movies::class, 10)->create();

    }
}

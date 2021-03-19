<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Categoria::class, 10)->create();   
    
    }
}

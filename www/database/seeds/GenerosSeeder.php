<?php

use Illuminate\Database\Seeder;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   /*     Genres::create([
            'name'=>'Ação'
        ]);

        Genres::create([
            'name'=>'Terror'
        ]);

        Genres::create([
            'name'=>'Aventura'
        ]);
        Genres::create([
            'name'=>'Suspense'
        ]);
     */

    factory(\App\Models\Genres::class, 10)->create();

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Movies_CastMemer;
class Movies_CastMemerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Movies_CastMemer::class, 10)->create();

    }
}

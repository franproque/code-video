<?php
use App\Models\CastMembers;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;


class CastMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        factory(\App\Models\CastMembers::class, 10)->create();


    }
}

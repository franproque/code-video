<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class GenresTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $formData=[
            'name'=>"Suspense"
        ];
        $this->json('POST',route('genres'),$formData)
        ->assertStatus(200);
        //->assertJson(['data'=>])
        //$this->assertTrue(true);
    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;


class QuotesAPIsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
    */
    public function test_QuotesAPIsTest()
    {
        $response = $this->get('api/v2/quotes/random-five')
                        ->assertStatus(200)
                        ->assertJsonStructure(['quotes'])
                        ->getContent();
    }
}

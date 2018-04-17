<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $buttonText = 'submit';
        $this->visit('/nieuwsposts/create')
        ->press($buttonText)
        ->assertRedirectedToRoute('/nieuwsposts');
    }
}

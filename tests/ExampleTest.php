<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
         'name' => 'Gabriel Novoa',
         'email'=> 'gnovoa@estrategos.mobi',
     ]);
        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Gabriel Novoa')
            ->see('gnovoa@estrategos.mobi');
    }
}

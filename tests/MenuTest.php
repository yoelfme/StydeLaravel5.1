<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenuTest extends TestCase
{
    
    public function testAccountLink()
    {

        // Guest users
        $this->visit('/')
            ->dontSee('Account');

        // Create a user
        $user = factory(App\User::class)->create([
            'name' => 'Yoel',
            'email' => 'yoelfme@hotmail.com',
            'role' => 'admin',
            'password' => bcrypt('admin')
        ]);

        $this->actingAs($user)
            ->visit('/')
            ->see('Account');

    }
}

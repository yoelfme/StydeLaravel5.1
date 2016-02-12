<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{

    use DatabaseTransactions;

    public function testEditProfile()
    {
        $user = $this->createUser();
        $name = 'Fransua';

        $this->actingAs($user)
            ->visit('account')
            ->click('Edit Profile')
            ->seePageIs('account/edit-profile')
            ->seeInField('name', 'Yoel')
            ->type($name, 'name')
            ->press('Update Profile')
            ->seePageIs('account')
            ->see('Your profile has been updated')
            ->seeInDatabase('users', [
                'email' => $user->email,
                'name' => $name
            ]);
    }
}

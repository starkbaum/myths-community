<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AvatarTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_new_user_has_default_avatar()
    {
        $user = factory(Myths\User::class)->create();

        $this->seeInDatabase('users', [
            'id' => $user->id,
            'avatar' => 'default.jpg'
        ]);
    }


}

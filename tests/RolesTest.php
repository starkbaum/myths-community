<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Myths\Role;

class RolesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_new_role_can_be_added_without_description()
    {
        $role = Role::create(['name' => 'Role']);

        $this->seeInDatabase('roles', [
            'id' => $role->id,
            'name' => $role->name,
            'description' => null
        ]);
    }

    /** @test */
    public function a_new_role_can_be_added_with_description()
    {
        $role = Role::create(['name' => 'Role', 'description' => 'this is a role only for testing']);

        $this->seeInDatabase('roles', [
            'id' => $role->id,
            'name' => $role->name,
            'description' => 'this is a role only for testing'
        ]);
    }

}

<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoriesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_category_can_be_deleted()
    {
        $category = factory(Myths\Category::class)->create();

        $this->seeInDatabase('categories', [
            'id'            => $category->id,
            'name'          => $category->name,
            'description'   => $category->description
        ]);

        $category->delete();

        $this->NotSeeInDatabase('categories', [
            'id'            => $category->id,
            'name'          => $category->name,
            'description'   => $category->description
        ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}

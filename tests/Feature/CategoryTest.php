<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_categories_index_displays_categories(): void
    {
        $category = Category::factory()->create([
            'name' => 'Garden Tools',
            'description' => 'Tools for the garden.',
        ]);

        $this->get('/categories')
            ->assertOk()
            ->assertSeeText('Categories')
            ->assertSeeText('Garden Tools')
            ->assertSeeText('Tools for the garden.');

        $this->get('/categories/create')->assertOk();
        $this->get("/categories/{$category->id}")->assertOk()->assertSeeText('Garden Tools');
        $this->get("/categories/{$category->id}/edit")->assertOk();
    }
}

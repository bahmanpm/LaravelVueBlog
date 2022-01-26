<?php

namespace Tests\Unit;

use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_can_get_comments()
    {

        $this->get(route('comments'))
            ->assertStatus(200);
    }

    public function test_can_create_comment()
    {

        $data = [
            'name' => 'Bahman',
            'comment' => 'Hi',
        ];

        $this->post(route('comment.add'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
}

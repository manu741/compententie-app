<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class RegistreerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();

    }

    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

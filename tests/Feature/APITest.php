<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Session;

class APITest extends TestCase
{
    /**
     * API test to get user details
     *
     * @return void
     */
    public function failedUserDetails()
    {
        $response = $this->json('get', '/api/user-details');
        $response->assertStatus(401);
    }
}

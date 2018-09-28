<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class APITest extends TestCase
{
    /**
     * API fail test to get user details
     *
     * @return void
     */
    public function tests_failed_user_api_get()
    {
        $response = $this->json('get', '/api/user-details');
        $response->assertStatus(401);
    }

    /**
     * API success test to get user details
     *
     * @return void
     */
    public function tests_success_user_api_get()
    {
        $user = factory(User::class)->create();
	    $this->actingAs($user, 'api');
	    
	    $response = $this->json('GET', '/api/user-details');
	    $response->assertStatus(200);
    }

    /**
     * API success test to get vehicle details based on user_id
     *
     * @return void
     */
    public function tests_success_vehicle_details_api_get()
    {
        $user = factory(User::class)->create();
	    $this->actingAs($user, 'api');
	    
	    $response = $this->json('GET', '/api/vehicle-details/1');
	    $response->assertStatus(200);
    }

    /**
     * API success test invalid route 404 response
     *
     * @return void
     */
    public function tests_api_route_not_found()
    {
        $user = factory(User::class)->create();
	    $this->actingAs($user, 'api');
	    
	    $response = $this->json('GET', '/api/invalid-route');
	    $response->assertStatus(404);
    }
}

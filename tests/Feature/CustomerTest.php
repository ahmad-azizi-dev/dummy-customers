<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;


    public function test_see_index()
    {
        $this->post(route('customer.store'), [
            'firstname' => 'Tobias ',
            'lastname' => 'Nitsche ',
            'is_commercial' => 1,
        ]);

        $response = $this->get('/');
        $response->assertSeeInOrder(['Customer table', 'Add new customer']);
        $response->assertSeeInOrder(['Tobias', 'Nitsche']);
        $response->assertStatus(200);
    }


    public function test_store_customer_success()
    {
        $response = $this->post(route('customer.store'), [
            'firstname' => 'Ahmad',
            'lastname' => 'Azizi',
            'is_commercial' => 0,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/');
        $response->assertSessionHas('successStore', 'The customer stored successfully!');
    }


    public function test_store_customer_validation_error()
    {
        $response = $this->post(route('customer.store'), [
            'firstname' => 'A',
            'lastname' => 'Azizi',
            'is_commercial' => 0,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/');
        $response->assertInvalid(['firstname']);
    }


    public function test_store_customer_validation_error2()
    {
        $response = $this->post(route('customer.store'), [
            'firstname' => 'ahmad',
            'is_commercial' => 0,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/');
        $response->assertInvalid(['lastname']);
    }


    public function test_assert_not_found()
    {
        $response = $this->get('/ahmad');
        $response->assertNotFound();
    }

}

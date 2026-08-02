<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_landing_page_contains_branding_and_cta(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Sambal Umizee');
        $response->assertSee('Beli Sekarang');
    }
}

<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_forwarded_https_is_used_for_generated_urls(): void
    {
        $this->withHeader('X-Forwarded-Proto', 'https')->get('/');

        $this->assertTrue(request()->isSecure());
        $this->assertStringStartsWith('https://', url('/'));
    }
}

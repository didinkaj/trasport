<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookSeatTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    
    /** @test */
    public function guest_may_not_book_seat()
    {
        
        $this->withExceptionHandling()
            ->get('/api/bookings')
            ->assertRedirect('/login');
        
        $this->withExceptionHandling()
            ->post('/home')
            ->assertRedirect('/login');
    }
}

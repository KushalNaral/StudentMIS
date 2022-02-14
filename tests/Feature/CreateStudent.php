<?php

namespace Tests\Feature;

use App\Models\Faculty;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateStudent extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create();
        $faculty = Faculty::factory()->create();


        $response = $this->post('/students');
        $response->assertRedirect('/students');
        $this->assertDatabaseHas('students', (array)$user);

        $response->assertStatus(200);
    }




}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreStudentEndpoint()
    {
        $response = $this->post('/store', [
            "firstname" => "Kayode",
            "lastname" => "Astore",
            "email" => "ifedamilola2009@gmail.com",
            "mobile" => "08148380710",
            "password" => "lolololololo"
        ]);

        $response->assertStatus(200);
    }

    public function testGet()
    {
        $response = $this->get('/id/1');

        $response->assertStatus(200);
    }

    public function testListsStudent()
    {
        $response = $this->get('/lists');

        $response->assertStatus(200);
    }
}

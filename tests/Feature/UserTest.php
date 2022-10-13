<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/dosen');

        $response->assertStatus(200);
    }

    public function testGetDosenFormPage()
    {
        $response = $this->get('/dosen/create');

        $response->assertStatus(200);
    }

    public function testCreateDosenData()
    {
        $data = [
            'nidn' => '12345678',
            'nama_lengkap' => 'Maaf Kamu Oke Banget',
            'email' => 'maaf_kamu_ok'.rand(5, 15).'e@gmail.com',
            'status' => rand(0,1),
            'tanggal_lahir' => '2022-10-11',
            'id_departemen' => 3
        ];

        $response = $this->post('/dosen', $data);

        $response->assertStatus(302);

    }

    public function testUpdateDosenData()
    {
        $dosen = \App\Models\Dosen::where('nidn','12345678')->first();

        $data = [
            'nama_lengkap' => 'Maaf Kamu Oke Banget Update',
            'status' => rand(0,1),
        ];

        $response = $this->put('/dosen/'.$dosen->id, $data);

        $response->assertStatus(302);

    }

    // public function testDeleteDosenData()
    // {
    //     $dosen = \App\Models\Dosen::where('nidn','12345678')->first();

    //     $response = $this->delete('/dosen/'.$dosen->id);

    //     $response->assertStatus(302);

    // }
}

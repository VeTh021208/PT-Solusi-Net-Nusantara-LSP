<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    public function test_halaman_publik_bisa_dibuka(): void
    {
        foreach (['/', '/profil', '/layanan', '/galeri', '/kontak', '/login', '/register'] as $uri) {
            $this->get($uri)->assertOk();
        }
    }

    public function test_halaman_user_memakai_asset_lokal_dan_logo(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('/build/assets/', false);
        $response->assertSee('images/Logo.png', false);
    }
}

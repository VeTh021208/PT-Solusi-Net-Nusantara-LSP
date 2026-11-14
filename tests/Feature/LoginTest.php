<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    private function pelanggan(): User
    {
        return User::factory()->create(['is_admin' => false]);
    }

    private function admin(): User
    {
        return User::factory()->create(['is_admin' => true]);
    }

    public function test_pelanggan_bisa_masuk_lewat_halaman_user(): void
    {
        $user = $this->pelanggan();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect(route('home'));

        $this->assertAuthenticatedAs($user, 'web');
    }

    public function test_admin_ditolak_di_halaman_login_user(): void
    {
        $admin = $this->admin();

        $this->post('/login', [
            'email' => $admin->email,
            'password' => 'password',
        ])->assertSessionHasErrors('email');

        $this->assertGuest('web');
    }

    public function test_admin_bisa_masuk_ke_panel_dan_session_user_tetap_kosong(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin, 'admin')
            ->get('/admin')
            ->assertOk();

        // Kembalikan guard default ke 'web' seperti kondisi normal
        $this->app['auth']->shouldUse('web');

        // Guard user (web) tidak ikut login — session memang terpisah
        $this->get('/langganan-saya')->assertRedirect('/login');
    }

    public function test_pelanggan_tidak_bisa_membuka_panel_admin(): void
    {
        $user = $this->pelanggan();

        // canAccessPanel() menolak akun non-admin
        $this->actingAs($user, 'admin')
            ->get('/admin')
            ->assertForbidden();
    }
}

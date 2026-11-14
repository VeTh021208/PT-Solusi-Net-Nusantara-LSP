<?php

namespace Tests\Feature;

use App\Auth\Pages\AdminLogin;
use App\Models\User;
use Filament\Auth\Pages\Login;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class AdminLoginTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        return User::factory()->create(['is_admin' => true]);
    }

    public function test_login_admin_langsung_ke_dashboard(): void
    {
        $admin = $this->admin();

        Livewire::test(Login::class)
            ->fillForm(['email' => $admin->email, 'password' => 'password'])
            ->call('authenticate')
            ->assertRedirect(url('/admin'));
    }

    public function test_login_admin_tidak_mengikuti_intended_user_yang_basi(): void
    {
        $admin = $this->admin();

        $this->session(['url.intended' => url('/langganan-saya')]);

        Livewire::test(Login::class)
            ->fillForm(['email' => $admin->email, 'password' => 'password'])
            ->call('authenticate')
            ->assertRedirect(url('/admin'));
    }

    public function test_admin_sudah_login_membuka_halaman_login_tetap_ke_dashboard(): void
    {
        $admin = $this->admin();

        $this->session(['url.intended' => url('/langganan-saya')]);
        $this->actingAs($admin, 'admin');

        Livewire::test(AdminLogin::class)
            ->assertRedirect(url('/admin'));
    }
}

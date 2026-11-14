<?php

namespace App\Auth\Pages;

use Filament\Auth\Pages\Login;
use Filament\Facades\Filament;

class AdminLogin extends Login
{
    public function mount(): void
    {
        if (Filament::auth()->check()) {
            // Lewati url.intended lama supaya selalu ke dashboard panel
            redirect()->to(Filament::getUrl());
        }

        $this->form->fill();
    }
}

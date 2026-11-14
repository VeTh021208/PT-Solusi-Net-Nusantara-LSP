<?php

namespace App\Http\Responses;

use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;

class AdminLoginResponse implements LoginResponse
{
    public function toResponse($request): RedirectResponse
    {
        // Selalu masuk ke dashboard panel, jangan ikuti url.intended lama
        return redirect()->to(Filament::getUrl());
    }
}

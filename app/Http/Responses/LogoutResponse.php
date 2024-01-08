<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\Contracts\LogoutResponse as Responsable;
use Illuminate\Http\RedirectResponse;

class LogoutResponse implements Responsable
{
    /**
     * personalizar o redirecionamento de logout
     * doc: https://filamentphp.com/community/tim-wassenburg-how-to-customize-logout-redirect
     *
    */
    public function toResponse($request): RedirectResponse
    {
        // change this to your desired route
        return redirect()->route('web.landing');
    }
}

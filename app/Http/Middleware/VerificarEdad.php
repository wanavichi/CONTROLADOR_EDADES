<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarEdad
{
    public function handle(Request $request, Closure $next)
    {
        $edad = $request->route('edad');

        if ($edad < 18) {
            return redirect('/contenido-ninos');
        } else {
            return redirect('/contenido-adultos');
        }

    }
}

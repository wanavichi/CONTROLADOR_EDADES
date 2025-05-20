<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/edad', function () {
    return view('edad'); // Vista del formulario
});

Route::get('/contenido-ninos', function () {
    return view('contenido-ninos'); // muestra la vista con diseño
});

Route::get('/contenido-adultos', function () {
    return view('contenido-adultos'); // muestra la vista con diseño
});

Route::post('/edad', function (Request $request) {
    $edad = $request->input('edad');

    if (!is_numeric($edad)) {
        return back()->with('error', 'Por favor ingresa un número válido.');
    }

    if ($edad < 18) {
        return redirect('/contenido-ninos');
    } else {
        return redirect('/contenido-adultos');
    }
});

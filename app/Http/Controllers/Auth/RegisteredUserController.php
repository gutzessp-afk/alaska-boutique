<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
                'regex:/^[\pL\s]+$/u', // solo letras y espacios (sin números ni símbolos)
            ],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email:rfc,dns', // valida que el correo tenga formato real
                'max:255',
                'unique:users,email', // que no exista ya
            ],
            'password' => [
                'required',
                'confirmed', // debe coincidir con la confirmación
                Password::min(8)        // mínimo 8 caracteres
                    ->mixedCase()       // mayúscula y minúscula
                    ->numbers()         // al menos un número
                    ->symbols(),        // al menos un símbolo
            ],
        ], [
            // Mensajes personalizados en español
            'name.required'   => 'El nombre es obligatorio.',
            'name.min'        => 'El nombre debe tener al menos 3 caracteres.',
            'name.regex'      => 'El nombre solo puede contener letras y espacios.',

            'email.required'  => 'El correo es obligatorio.',
            'email.email'     => 'Ingresa un correo electrónico válido.',
            'email.unique'    => 'Ese correo ya está registrado.',

            'password.required'  => 'La contraseña es obligatoria.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.min'       => 'La contraseña debe tener al menos 8 caracteres.',
            'password.mixed'     => 'La contraseña debe incluir mayúsculas y minúsculas.',
            'password.numbers'   => 'La contraseña debe incluir al menos un número.',
            'password.symbols'   => 'La contraseña debe incluir al menos un símbolo (ej. @, #, $).',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->route('login')->with('status', '¡Cuenta creada con éxito! Ahora inicia sesión.');
    }
}
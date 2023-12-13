<style>
    /* src/login.css */
    .card {
        /* Agrega estilos de la card según tus preferencias */
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        /* Agrega estilos del formulario según tus preferencias */
        margin-bottom: 1rem;
    }

    .btn {
        /* Agrega estilos del botón según tus preferencias */
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        /* Estilos adicionales en el hover */
        background-color: #45a049;
    }
</style>
<br><br><br><br><br><br><br>
<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-center">
                        <x-authentication-card>
                            <x-slot name="logo">
                                <x-authentication-card-logo />
                            </x-slot>

                            <x-validation-errors class="mb-4" />

                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3 form-group">
                                    <x-label for="email" value="{{ __('Correo') }}" />
                                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                </div>

                                <div class="mb-3 form-group">
                                    <x-label for="password" value="{{ __('Contraseña') }}" />
                                    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="mb-3 form-check">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600" href="{{ url('/forgot-password') }}">
                                        Olvidaste tu Contraseña?
                                    </a>
                                    @endif
                                </div>

                                <div class="mb-3 form-check">
                                    @if (\App\Models\User::count() == 0)
                                    <a class="underline text-sm text-gray-600" href="{{ url('/register') }}">
                                        Registrarme
                                    </a>
                                    @endif
                                </div>

                                <div class="d-grid gap-2">
                                    <x-button class="btn" style="background-color: #6BA2FC; color: black;">
                                        {{ __('Ingresar') }}
                                    </x-button>
                                </div>
                                <a href="{{ route('manual.login') }}">Ir al Manual de Usuario</a>

                            </form>
                        </x-authentication-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
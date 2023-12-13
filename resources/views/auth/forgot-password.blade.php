<br><br><br><br><br><br><br>
<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card" style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <x-authentication-card>
                        <x-slot name="logo">
                            <x-authentication-card-logo />
                        </x-slot>

                        <div class="mb-4 text-sm text-gray-600">
                            Olvidaste tu contraseña? No te preocupes... Escribe tu correo para enviarte una notificación y puedas obtener tu contraseña
                        </div>

                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-3 form-group">
                                <x-label for="email" value="{{ __('Correo') }}" />
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>

                            <div class="d-grid gap-2">
                                <x-button class="btn" style="background-color: #6BA2FC; color: black;">
                                    {{ __('Enviar Correo') }}
                                </x-button>
                            </div>
                        </form>
                    </x-authentication-card>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
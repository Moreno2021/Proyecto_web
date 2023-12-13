
<br><br><br><br><br><br><br>
@if (App\Models\User::count() == 0)
<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card" style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <x-authentication-card>
                        <x-slot name="logo">
                            <x-authentication-card-logo />
                        </x-slot>

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register', '/login') }}">
                            @csrf
                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif

                            <div class="mb-3 form-group">
                                <x-label for="Name" value="{{ __('Nombre') }}" />
                                <x-input id="Name" class="form-control" type="text" name="Name" :value="old('Name')" required autofocus autocomplete="Name" />
                            </div>

                            <div class="mb-3 form-group">
                                <x-label for="email" value="{{ __('Correo') }}" />
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            </div>

                            <div class="mb-3 form-group">
                                <x-label for="password" value="{{ __('Contraseña') }}" />
                                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mb-3 form-group">
                                <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                                <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mb-3 form-group">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600" href="{{ route('login') }}">
                                    {{ __('Ya estas registrado?') }}
                                </a>
                                <br><br>                
                                <x-button class="btn" style="background-color: #6BA2FC; color: black;">
                                    {{ __('Registrarme') }}
                                </x-button>
                            </div>
                        </form>
                    </x-authentication-card>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
@else
<x-guest-layout >
        <div class="alert alert-danger text-center">
            Ya hay un usuario registrado. No puedes registrarte nuevamente.
        </div>
</x-guest-layout>
@endif
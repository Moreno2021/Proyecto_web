<br><br><br><br><br><br><br>
<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card" style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <x-authentication-card>
                        <x-slot name="logo">
                        </x-slot>

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="mb-3 form-group">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                            </div>

                            <div class="mb-3 form-group">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mb-3 form-group">
                                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            <div class="d-grid gap-2">
                                <x-button class="btn" style="background-color: #6BA2FC; color: black;">
                                    {{ __('Restablecer Contraseña') }}
                                </x-button>
                            </div>
                        </form>
                    </x-authentication-card>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

<x-guest-layout>
    <style>
        /* Full landscape background */
        body {
            background: url('https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=1950&q=80') 
                        no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            font-family: 'Figtree', sans-serif;
        }

        /* Overlay for better text visibility */
        .bg-overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(2px);
            z-index: -1;
        }

        /* Login card */
        .login-card {
            background: rgba(255,255,255,0.9);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            padding: 2rem;
        }

        /* Brand */
        .brand-title {
            font-size: 2rem;
            font-weight: bold;
            color: #DAA520;
            text-align: center;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
        }
    </style>

    <div class="bg-overlay"></div>

    <div class="flex flex-col items-center justify-center">
       <a href="/"><div class="brand-title">WearWell</div></a> 

        <div class="w-full sm:max-w-md login-card">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" 
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" 
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" 
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                               name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" 
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

@vite(['resources/css/style.css', 'resources/js/app.js'])
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nunito:wght@300&display=swap" rel="stylesheet">

<div class="loginContainer bg-dark">
    <video class="video_perro" height="100%" autoplay muted loop>
        <source src="{{ asset('storage/perro.mp4') }}" type="video/mp4" />
        Your browser doesn't support this video.
    </video>
    <div class="login_container flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="tituloLogin mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white font-indieflower">Paws</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input-label class="text-white" for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label  class="text-white" for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="ml-2 text-sm  text-white">{{ __('Remember me') }}</span>
                    </label>
                </div> <br>

                <x-primary-button class="ml-3 pink-button">
                    {{ __('Log in') }}
                </x-primary-button>

                <div class="flex items-center justify-around mt-4">
                    @if (Route::has('password.request'))    
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 text-white"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    @if (Route::has('password.request'))
                        <a class="underline ml-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 text-white"
                            href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                </div>
            </form>
      
            {{-- <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500 text-white">Start a 14 day free trial</a>
            </p> --}}
        </div>
    </div>
</div>

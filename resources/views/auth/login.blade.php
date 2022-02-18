@extends("include.app")
@section("content")
@include('include.navbar')
<x-guest-layout >

    <x-jet-authentication-card >

        <x-slot name="" hidden style="display: none">
            <x-jet-authentication-card-logo  hidden style="display: none "/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Mot de passe" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">Mémorisé</span>
                </label>
            </div>
            <center>
            <div class="flex items-center justify-end mt-4 mx-auto" style="transform:translate(-10%,0)">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" style="text-decoration: none" href="{{ route('password.request') }}">Mot de passe oublié ?
                    </a>
                @endif
                <x-jet-button class="ml-4" style="background-color: #FC5B62;">
                   Se connecter
                </x-jet-button>
            </div> <br>
          <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: #FC5B62; text-decoration: none; " href="{{ route('register') }}">
                Vous n'avais pas un compte? <span style="text-decoration:underline">s'inscrire</span>  </center>
            </a>
        </form>
    </x-jet-authentication-card>

</x-guest-layout>

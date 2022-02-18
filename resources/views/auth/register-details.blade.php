@extends("include/app")
@section("content")

<body id="register_bg">
    <aside style="width: 100% ;background-color: white">
        <center>
        <figure>
            <a href="{{ route('login') }}"><img src="img/logo_sticky.png" width="100" height="36" data-retina="true" alt="" class="logo_sticky"></a>
        </figure>
    </center>
    </aside>
	<nav id="menu" class="fake_menu"></nav>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
    <h5>Champs additionels</h5>
	<!-- End Preload -->

	<div id="login" >

            <style>
                @media only screen and (min-width: 700px) {
                            .form-register{
                                    width:30%;
                                    margin: auto;
                                    display: block;
                            }}
            </style>

            <!-- Validation Errors -->


			<form autocomplete="off" method="POST"  action="{{route('registerUserDetails')}}" enctype="multipart/form-data" style="background-color: gray">
                @csrf
                @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif



                        <x-guest-layout >
                            <x-jet-authentication-card>
                                <x-slot name="logo">
                                    <x-jet-authentication-card-logo />
                                </x-slot>

                                <x-jet-validation-errors class="mb-4" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div>
                                        <x-jet-label for="adresse" value="Adresse" />
                                        <x-jet-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="name" />
                                    </div>
                                    <div>
                                        <x-jet-label for="description" value="Description" />
                                        <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="name" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="tel" value="Numéro de telephone actif" />
                                        <x-jet-input id="tel" class="block mt-1 w-full" type="number" name="tel"  required />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="date_nais" value="Date de naissance" />
                                        <x-jet-input id="date_naiss" class="block mt-1 w-full" type="date" name="date_naiss" required autocomplete="date_naiss" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="photo" value="Photo de profil" />
                                        <x-jet-input id="photo de profi" class="block mt-1 w-full" type="file" name="photo" required />
                                    </div>

                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-jet-label for="terms">
                                                <div class="flex items-center">
                                                    <x-jet-checkbox name="terms" id="terms"/>

                                                    <div class="ml-2">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-jet-label>
                                        </div>
                                    @endif

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color: #FC5B62;">
                                            Déja inscrit ?
                                        </a>

                                        <x-jet-button class="ml-4" style="background-color: #FC5B62;">
                                           S'inscrire
                                        </x-jet-button>
                                    </div>
                                </form>
                            </x-jet-authentication-card>
                        </x-guest-layout>



			</form>

        </div>
		</aside>
	</div>
	<!-- /login -->

@endsection

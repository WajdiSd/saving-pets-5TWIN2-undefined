<body class="antialiased">
    <div class="">
        @if (Route::has('login'))
        <div class="">
            @auth
            @extends('layouts/blankLayout')

            @section('title', 'Under Maintenance - Pages')

            @section('page-style')
            <!-- Page -->
            <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-misc.css')}}">
            @endsection

            @section('content')
            <!--Under Maintenance -->
            <div class="container-xxl container-p-y">
                <div class="misc-wrapper">
                    <h2 class="mb-2 mx-2">Welcome " {{ Auth::user()->name }} "</h2>
                    <p class="mb-4 mx-2">
                        Click here to continue browsing
                    </p>
                    <a href="{{url('/dashboard')}}" class="btn btn-primary">Continue Browsing</a>
                    <div class="mt-4">
                        <img src="{{asset('assets/img/illustrations/girl-doing-yoga-light.png')}}" alt="girl-doing-yoga-light" width="500" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- /Under Maintenance -->
            @endsection

            @else
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            @include('_partials.wiggler',["width"=>150,"height"=>222,"withbg"=>'#696cff']) </a>
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <a href="{{url('/register')}}" style="color: green">
                        <button type="button" class="btn" style="float: right;">Create an account</button>
                    </a>
                    </br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>



                        <div class="flex items-center justify-end mt-4">

                            <x-primary-button class="ml-3">
                                {{ __('Log in') }}
                            </x-primary-button>






                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>

            @endauth

        </div>
    </div>
    @endif
</body>

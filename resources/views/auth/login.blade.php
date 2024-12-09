@extends('layout.auth')

@section('formAuth')
<div class="min-h-screen flex items-center shadow-lg bg-custom-375">
    <div class="w-[45rem] p-10 rounded-lg shadow-md grid m-16 bg-custom-400">
        <div class="">
            <span class="text-custom-50 text-sm mb-5">Please login to continue to your account.</span>
            <h1 class="text-5xl font-semibold mt-1 text-custom-50">Log In<span>.</span></h1>
            <div class="text-custom-50 mt-2 text-sm">
                Don't have an account? 
                <a href="{{ route('register.form') }}" class="text-custom-300">Register</a>
            </div>

            <form action="{{ route('login.submit') }}" method="POST" class="mt-6">
                @csrf

                @if ($errors->any())
                    <div class="mb-4 text-red-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="grid gap-2 mb-4">
                    <label for="email" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Your Email</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded block w-full p-0.5">
                        <input type="email" id="email" name="email" class="w-full text-sm bg-transparent border-transparent focus:outline-none" placeholder="Input your email">
                    </div>
                </div>

                <div class="grid gap-2 mb-4">
                    <label for="password" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Password</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded block w-full p-0.5">
                        <input type="password" id="password" name="password" class="w-full text-sm bg-transparent border-transparent" placeholder="Input your password">
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <label class="text-sm text-gray-600">
                        <input type="checkbox" name="remember" class="mr-1"> Remember Me
                    </label>
                    <!-- Update: Hubungkan tombol "Forgot Password" ke route "password.request" -->
                    <a href="{{ route('password.request') }}" class="text-sm text-custom-300">Forgot Password?</a>
                </div>

                <button type="submit" class="bg-custom-350 rounded-full w-full py-2 my-8 text-custom-50">Continue</button>
            </form>
        </div>
    </div>
</div>
@stop

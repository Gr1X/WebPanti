@extends('layout.auth')

@section('formAuth')
<div class="flex items-center pt-20">
    <div class="">
        <div class="w-[42rem] ms-10 p-10 rounded-2xl grid">
            <span class="text-custom-50 text-sm mb-2">Please login to continue to your account.</span>
            <h1 class="text-5xl font-bold mt-1 text-custom-50">Log In<span>.</span></h1>
            <div class="text-custom-50 my-2 mb-4 text-sm font-semibold">
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
                    <label for="email" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Email</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                        <input type="email" id="email" name="email" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-none" placeholder="Input your email">
                    </div>
                </div>

                <div class="grid gap-2 mb-4">
                    <label for="password" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Password</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                        <input type="password" id="password" name="password" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-none" placeholder="Input your password">
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <label class="text-sm text-gray-600">
                        <input type="checkbox" name="remember" class="mr-1 rounded"> Remember Me
                    </label>
                    <!-- Update: Hubungkan tombol "Forgot Password" ke route "password.request" -->
                    <a href="{{ route('password.request') }}" class="text-sm text-custom-300">Forgot Password?</a>
                </div>

                <button type="submit" class="bg-custom-50 rounded-xl w-full py-3 my-8 text-white font-semibold shadow">Login</button>
            </form>
        </div>
    </div>
</div>
@stop

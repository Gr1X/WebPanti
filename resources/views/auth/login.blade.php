@extends('layout.auth')

@section('formAuth')
<div class="min-h-screen flex items-center shadow-lg">
    <div class="w-[45rem] p-10 rounded-lg shadow-md grid m-16">
        <div class="">
            <span class="text-slate-400 text-sm mb-5">Please login to continue to your account.</span>
            <h1 class="text-5xl font-semibold mt-1 text-white">Log In<span>.</span></h1>
            <div class="text-white mt-2 text-sm">
                Don't have an account? 
                <a href="{{ route('register.form') }}" class="text-sky-500">Register</a>
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
                    <label for="email" class="block text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                    <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded block w-full p-0.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <input type="email" id="email" name="email" class="w-full text-sm bg-transparent border-transparent focus:outline-none" placeholder="Input your email">
                    </div>
                </div>

                <div class="grid gap-2 mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded block w-full p-0.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <input type="password" id="password" name="password" class="w-full text-sm bg-transparent border-transparent" placeholder="Input your password">
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <label class="text-sm text-gray-600">
                        <input type="checkbox" name="remember" class="mr-1"> Remember Me
                    </label>
                    <!-- Update: Hubungkan tombol "Forgot Password" ke route "password.request" -->
                    <a href="{{ route('password.request') }}" class="text-sm text-sky-500">Forgot Password?</a>
                </div>

                <button type="submit" class="bg-sky-400 rounded-full w-full py-2 my-8">Continue</button>
            </form>
        </div>
    </div>
</div>
@stop

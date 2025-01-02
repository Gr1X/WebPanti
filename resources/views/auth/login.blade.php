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
                
                {{-- Email Field --}}
                <div class="grid gap-2 mb-4">
                    <label for="email" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Email</label>
                    <div class="flex items-center 
                        bg-custom-400 
                        border 
                        rounded-xl 
                        block w-full p-0.5 
                        @error('email') border-red-500 @else border-gray-300 @enderror">
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-none" 
                            placeholder="Input your email"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Password Field --}}
                <div class="grid gap-2 mb-4">
                    <label for="password" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Password</label>
                    <div class="flex items-center 
                        bg-custom-400 
                        border 
                        rounded-xl 
                        block w-full p-0.5 
                        @error('password') border-red-500 @else border-gray-300 @enderror">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-none" 
                            placeholder="Input your password">
                    </div>
                    @error('password')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Remember Me and Forgot Password --}}
                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" 
                               name="remember" 
                               class="mr-2 h-4 w-4 text-custom-300 focus:ring-custom-300 border-gray-300 rounded">
                        <span class="text-custom-50">Remember Me</span>
                    </label>
                </div>

                {{-- Submit Button --}}
                <button type="submit" class="bg-custom-50 rounded-xl w-full py-3 my-8 text-white font-semibold shadow">Login</button>
            </form>
        </div>
    </div>
</div>
@stop

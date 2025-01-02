@extends('layout.auth')

@section('formAuth')
<div class="flex items-center pt-20">
    <div class="">
        <div class="w-[42rem] ms-10 p-10 pb-5 rounded-2xl grid">
            <span class="text-custom-50 text-sm mb-2">Register to create a new account.</span>
            <h1 class="text-5xl font-bold mt-1 text-custom-50">Create New Account<span>.</span></h1>
            <div class="text-custom-50 my-2 mb-2 text-sm font-semibold">
                Already have an account? 
                <a href="{{ route('login.form') }}" class="text-custom-300">Login</a>
            </div>

            <form action="{{ route('register.submit') }}" method="POST" class="mt-6">
                @csrf

                {{-- Full Name Field --}}
                <div class="grid gap-2 mb-2">
                    <label for="name" class="block text-sm font-medium text-custom-50">Full Name</label>
                    <div class="flex items-center bg-custom-400 border 
                        rounded-xl block w-full p-0.5 
                        @error('name') border-red-500 @else border-gray-300 @enderror">
                        <input type="text" name="name" id="name" 
                            class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" 
                            placeholder="Full Name" 
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Email and Phone Fields --}}
                <div class="flex gap-4">
                    {{-- Email Field --}}
                    <div class="grid gap-2 mb-4 w-1/2">
                        <label for="email" class="block text-sm font-medium text-custom-50">Your Email</label>
                        <div class="flex items-center bg-custom-400 border 
                            rounded-xl block w-full p-0.5 
                            @error('email') border-red-500 @else border-gray-300 @enderror">
                            <input type="email" name="email" id="email" 
                                class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" 
                                placeholder="Input Email" 
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
    
                    {{-- Phone Number Field --}}
                    <div class="grid gap-2 mb-4 w-1/2">
                        <label for="no_telp" class="block text-sm font-medium text-custom-50">Phone Number</label>
                        <div class="flex items-center bg-custom-400 border 
                            rounded-xl block w-full p-0.5 
                            @error('no_telp') border-red-500 @else border-gray-300 @enderror">
                            <input type="text" name="no_telp" id="no_telp" 
                                class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" 
                                placeholder="Input Phone Number" 
                                value="{{ old('no_telp') }}">
                        </div>
                        @error('no_telp')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {{-- Password Field --}}
                <div class="grid gap-2 mb-4">
                    <label for="password" class="block text-sm font-medium text-custom-50">Password</label>
                    <div class="flex items-center bg-custom-400 border 
                        rounded-xl block w-full p-0.5 
                        @error('password') border-red-500 @else border-gray-300 @enderror">
                        <input type="password" name="password" id="password" 
                            class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" 
                            placeholder="Input Password">
                    </div>
                    @error('password')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Confirm Password Field --}}
                <div class="grid gap-2 mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-custom-50">Confirm Password</label>
                    <div class="flex items-center bg-custom-400 border 
                        rounded-xl block w-full p-0.5 
                        @error('password_confirmation') border-red-500 @else border-gray-300 @enderror">
                        <input type="password" name="password_confirmation" id="password_confirmation" 
                            class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" 
                            placeholder="Confirm Password">
                    </div>
                    @error('password_confirmation')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <button type="submit" class="bg-custom-50 rounded-xl w-full py-3 mt-4 text-white font-semibold shadow">Register</button>
            </form>
        </div>
    </div>
</div>
@stop

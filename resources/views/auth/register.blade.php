@extends('layout.auth')

@section('formAuth')
<div class="flex items-center pt-20">
    <div class="">
        <div class="w-[42rem] ms-10 p-10 rounded-2xl grid">
            <span class="text-custom-50 text-sm mb-2">Register to create a new account.</span>
            <h1 class="text-5xl font-bold mt-1 text-custom-50">Create New Account<span>.</span></h1>
            <div class="text-custom-50 my-2 mb-4 text-sm font-semibold">
                Already have an account? 
                <a href="{{ route('login.form') }}" class="text-custom-300">Login</a>
            </div>

            <form action="{{ route('register.submit') }}" method="POST" class="mt-6">
                @csrf

                {{-- Tampilkan pesan error jika ada --}}
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
                    <label for="name" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Full Name</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                        <input type="text" name="name" id="name" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" placeholder="Full Name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="grid gap-2 mb-4 w-1/2">
                        <label for="email" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Your Email</label>
                        <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                            <input type="email" name="email" id="email" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" placeholder="Input Email" value="{{ old('email') }}">
                        </div>
                    </div>
    
                    <div class="grid gap-2 mb-4 w-1/2">
                        <label for="no_telp" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Phone Number</label>
                        <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                            <input type="text" name="no_telp" id="no_telp" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" placeholder="Input Phone Number" value="{{ old('no_telp') }}">
                        </div>
                    </div>
                </div>

                <div class="grid gap-2 mb-4">
                    <label for="password" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Password</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                        <input type="password" name="password" id="password" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" placeholder="Input Password">
                    </div>
                </div>

                <div class="grid gap-2 mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Confirm Password</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" placeholder="Confirm Password">
                    </div>
                </div>

                <button type="submit" class="bg-custom-50 rounded-xl w-full py-3 mt-8 text-white font-semibold shadow">Register</button>
            </form>
        </div>
    </div>
</div>
@stop

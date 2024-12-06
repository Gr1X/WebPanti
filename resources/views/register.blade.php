@extends('layout.auth')

@section('formAuth')
    <div class="min-h-screen flex items-center shadow-lg">
        <div class="w-[45rem] p-8 rounded-lg shadow-md grid m-16">
            <div class="">
                <span class="text-slate-400 text-sm mb-5">Register to create new account.</span>
                <h1 class="text-5xl font-semibold mt-1 text-white">Create New Account<span>.</span></h1>
                <div class="text-white mt-2 text-sm">Already have an account? <a href="{{ route('login.form') }}" class="text-sky-500">Login</a></div>

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
                        <label for="name" class="block text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                        <div class="flex gap-2">
                            <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <input type="text" name="name" id="name" class="w-full text-sm bg-transparent border-transparent" placeholder="Full Name" value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-2 mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                        <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <input type="email" name="email" id="email" class="w-full text-sm bg-transparent border-transparent" placeholder="Input Email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="grid gap-2 mb-4">
                        <label for="no_telp" class="block text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <input type="text" name="no_telp" id="no_telp" class="w-full text-sm bg-transparent border-transparent" placeholder="Input Phone Number" value="{{ old('no_telp') }}">
                        </div>
                    </div>

                    <div class="grid gap-2 mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <input type="password" name="password" id="password" class="w-full text-sm bg-transparent border-transparent" placeholder="Input Password">
                        </div>
                    </div>

                    <div class="grid gap-2 mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full text-sm bg-transparent border-transparent" placeholder="Confirm Password">
                        </div>
                    </div>

                    <button class="bg-sky-400 rounded-full w-full py-2 my-8">Register</button>
                </form>
            </div>
        </div>
    </div>
@stop

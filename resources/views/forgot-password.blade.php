@extends('layout.auth')

@section('formAuth')
<div class="min-h-screen flex items-center shadow-lg">
    <div class="w-[45rem] p-10 rounded-lg shadow-md grid m-16">
        <div class="">
            <span class="text-slate-400 text-sm mb-5">Forgot your password?</span>
            <h1 class="text-4xl font-semibold mt-1 text-white">Reset Password<span>.</span></h1>
            <div class="text-white mt-2 text-sm">
                Remembered your password? 
                <a href="{{ route('login.form') }}" class="text-sky-500">Log in</a>
            </div>

            <form action="{{ route('password.email') }}" method="POST" class="mt-6">
                @csrf

                @if (session('status'))
                    <div class="mb-4 text-green-500">
                        {{ session('status') }}
                    </div>
                @endif

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
                        <input type="email" id="email" name="email" class="w-full text-sm bg-transparent border-transparent focus:outline-none" placeholder="Input your email" required>
                    </div>
                </div>

                <button type="submit" class="bg-sky-400 rounded-full w-full py-2 my-8">Send Password Reset Link</button>
            </form>
        </div>
    </div>
</div>
@stop

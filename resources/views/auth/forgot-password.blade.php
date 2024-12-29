@extends('layout.auth')

@section('formAuth')
<div class="flex items-center pt-20">
    <div class="">
        <div class="w-[42rem] ms-10 p-10 rounded-2xl grid">
            <span class="text-custom-50 text-sm mb-2">Forgot your password?</span>
            <h1 class="text-4xl font-bold mt-1 text-custom-50">Reset Password<span>.</span></h1>
            <div class="text-custom-50 my-2 mb-4 text-sm font-semibold">
                Remembered your password? 
                <a href="{{ route('login.form') }}" class="text-custom-300">Log in</a>
            </div>

            <form action="{{ route('password.request') }}" method="POST" class="mt-6">
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
                    <label for="email" class="block text-sm font-medium text-custom-50 dark:text-custom-50">Your Email</label>
                    <div class="flex items-center bg-custom-400 border border-gray-300 text-custom-50 rounded-xl block w-full p-0.5">
                        <input type="email" id="email" name="email" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:ring-0 focus:border-0" placeholder="Input your email" required>
                    </div>
                </div>

                <button type="submit" class="bg-custom-50 rounded-xl w-full py-3 my-8 text-white font-semibold shadow">Send Password Reset Link</button>
            </form>
        </div>
    </div>
</div>
@stop

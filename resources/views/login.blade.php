@extends('layout.auth')

@section('formAuth')
<div class="min-h-screen flex items-center shadow-lg">
    <div class="w-[45rem] p-10 rounded-lg shadow-md grid m-16">
        <div class="">
            <span class="text-slate-400 text-sm mb-5">Please login to continue to your account.</span>
            <h1 class="text-5xl font-semibold mt-1 text-white">Log In<span>.</span></h1>
            <div class="text-white mt-2 text-sm">Doesn't Have an Account? <a href="" class="text-sky-500">Register</a></div>

            <form action="" class=" mt-6">
                <div class="grid gap-2 mb-4">
                    <label for="helper-text" class="block text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                    <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded block w-full p-0.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white fous:ring-0 focus:outline-none focus:border-none">
                        <ion-icon name="at-outline" class="text-white text-center ms-2"></ion-icon>
                        <input type="email" id="helper-text" aria-describedby="helper-text-explanation" class="w-full text-sm bg-transparent border-transparent focus:outline-none focus:border-none" placeholder="Input password">
                    </div>
                </div>
        
                <div class="grid gap-2 mb-4">
                    <label for="helper-text" class="block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-0">
                        <ion-icon name="lock-closed" class="text-white text-center ms-2"></ion-icon>
                        <input type="password" id="helper-text" aria-describedby="helper-text-explanation" class="w-full text-sm bg-transparent border-transparent" placeholder="Input password">
                    </div>
                </div>
                
                <button class="bg-sky-400 rounded-full w-full py-2 my-8">Continue</button>
            </form>
        </div>
    </div>
</div>
@stop
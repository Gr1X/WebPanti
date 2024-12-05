<!DOCTYPE html>
<html lang="en" class="font-mono">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Centered</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-black">
    <div class="min-h-screen flex items-center shadow-lg">
        <div class="w-[35rem] p-8 rounded-lg shadow-md grid m-10">
            <div class="">
                <span class="text-slate-400 text-sm mb-5">Register to create new account.</span>
                <h1 class="text-5xl font-semibold mt-1 text-white">Create new account<span>.</span></h1>
                <div class="text-white mt-2 text-sm">Already have an account? <a href="" class="text-sky-500">Login</a></div>

                <form action="" class=" mt-6">
                    <div class="grid gap-2 mb-4">
                        <label for="helper-text" class="block text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <div class="flex gap-2">
                            <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <input type="email" id="helper-text" aria-describedby="helper-text-explanation" class="w-full text-sm bg-transparent border-transparent" placeholder="Firstname">
                            </div>
        
                            <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <input type="email" id="helper-text" aria-describedby="helper-text-explanation" class="w-full text-sm bg-transparent border-transparent" placeholder="Lastname">
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-2 mb-4">
                        <label for="helper-text" class="block text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                        <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <ion-icon name="at-outline" class="text-white text-center ms-2"></ion-icon>
                            <input type="email" id="helper-text" aria-describedby="helper-text-explanation" class="w-full text-sm bg-transparent border-transparent" placeholder="Input Email">
                        </div>
                    </div>
            
                    <div class="grid gap-2 mb-4">
                        <label for="helper-text" class="block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <div class="flex items-center bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <ion-icon name="lock-closed" class="text-white text-center ms-2"></ion-icon>
                            <input type="password" id="helper-text" aria-describedby="helper-text-explanation" class="w-full text-sm bg-transparent border-transparent" placeholder="Input password">
                        </div>
                    </div>
                    
                    <button class="bg-sky-400 rounded-full w-full py-2 my-8">Register</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>

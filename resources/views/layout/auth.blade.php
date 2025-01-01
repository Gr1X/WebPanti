<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Centered</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-black font-poppins">
    <main class="bg-custom-375 h-screen">
        {{-- Call Register atau Login --}}
        <div class="fixed">
            <a href="{{ route('landing') }}" class="flex items-center p-10 pt-16 pb-2 text-sm gap-2 text-gray-600 hover:text-gray-700"><ion-icon name="chevron-back-outline" class="self-center size-5"></ion-icon> Back to dashboard</a>
        </div>
        <div class="flex justify-between">
            @yield('formAuth')
            <div class="bg-emerald-900 h-screen w-[35rem] rounded-bl-[15rem]">
                <div class="flex justify-center items-center h-full">
                    <div class="flex justify-between">
                        <div class="grid">
                            <span class="text-custom-500 text-2xl font-bold">Panti Asuhan <span class="m-0 p-0 text-2xl font-bold text-custom-200">Nurul Jadid</span></span>
                            <span class="text-custom-50 text-md text-center font-semibold font-italic text-white">Tangerang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

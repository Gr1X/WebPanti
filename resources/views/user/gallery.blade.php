@extends('layout.app')

@section('content')
    <div class="bg-gray-100 min-h-screen px-14 gap-2">
        <div class="pt-16 w-full lg:pt-44 mb-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:pt-16 md:p-12">
                <h1 class="text-gray-900 dark:text-white text-4xl md:text-5xl font-semibold mb-2">Story & Gallery</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers.</p>
            </div>
        </div>

        <div class="mb-8 w-full">
            <h1 class="text-4xl">Story</h1>
            <div class="grid grid-cols-3 py-4 gap-4">
                <a href="" class="bg-gray-900 flex justify-center items-center rounded-lg">
                    <div class="flex items-center bg-gray-800 text-white rounded-lg shadow-md p-6 max-w-lg w-full">
                        <!-- Profile Image -->
                        <img 
                            class="w-20 h-20 rounded-full mr-4 object-cover" 
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" 
                            alt="Profile Image"
                        >
                        <!-- Card Content -->
                        <div>
                            <h1 class="text-2xl font-bold">Debbie O'Brien</h1>
                            <p class="text-sm text-gray-400">Senior Program Manager at Microsoft</p>
                            <p class="mt-2 text-gray-300 text-sm">
                                Have been working with CSS for over ten years and Tailwind just makes my life easier. It is still CSS and you use flex, grid, etc., but just quicker to write and maintain.
                            </p>
                        </div>
                    </div>
                </a>

                <a href="" class="bg-gray-900 flex justify-center items-center rounded-lg">
                    <div class="flex items-center bg-gray-800 text-white rounded-lg shadow-md p-6 max-w-lg w-full">
                        <!-- Profile Image -->
                        <img 
                            class="w-20 h-20 rounded-full mr-4 object-cover" 
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" 
                            alt="Profile Image"
                        >
                        <!-- Card Content -->
                        <div>
                            <h1 class="text-2xl font-bold">Debbie O'Brien</h1>
                            <p class="text-sm text-gray-400">Senior Program Manager at Microsoft</p>
                            <p class="mt-2 text-gray-300 text-sm">
                                Have been working with CSS for over ten years and Tailwind just makes my life easier. It is still CSS and you use flex, grid, etc., but just quicker to write and maintain.
                            </p>
                        </div>
                    </div>
                </a>

                <a href="" class="bg-gray-900 flex justify-center items-center rounded-lg">
                    <div class="flex items-center bg-gray-800 text-white rounded-lg shadow-md p-6 max-w-lg w-full">
                        <!-- Profile Image -->
                        <img 
                            class="w-20 h-20 rounded-full mr-4 object-cover" 
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" 
                            alt="Profile Image"
                        >
                        <!-- Card Content -->
                        <div>
                            <h1 class="text-2xl font-bold">Debbie O'Brien</h1>
                            <p class="text-sm text-gray-400">Senior Program Manager at Microsoft</p>
                            <p class="mt-2 text-gray-300 text-sm">
                                Have been working with CSS for over ten years and Tailwind just makes my life easier. It is still CSS and you use flex, grid, etc., but just quicker to write and maintain.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="my-2">
            <div class="flex items-center my-4">
                <h1 class="text-4xl">Gallery</h1>
            </div>

            <div class="flex">
                <div class="grid w-72 h-full bg-slate-700 gap-2 py-10 rounded-lg self-center">
                    <button class="bg-sky-800 text-white m-2 rounded-t-lg p-2">2019</button>
                    <button class="bg-sky-800 text-white m-2 rounded-t-lg p-2">2020</button>
                    <button class="bg-sky-800 text-white m-2 rounded-t-lg p-2">2021</button>
                    <button class="bg-sky-800 text-white m-2 rounded-t-lg p-2">2022</button>
                    <button class="bg-sky-800 text-white m-2 rounded-t-lg p-2">2023</button>
                    <button class="bg-sky-800 text-white m-2 rounded-t-lg p-2">2024</button>
                </div>
                
                {{-- Kalo Fotonya kosong, maka  --}}
                {{-- <div class="w-full flex justify-center items-center bg-slate-100">
                    <div class="grid">
                        <ion-icon name="image-outline" class="size-72"></ion-icon>
                        <span class="text-4xl font-semibold text-center">No Image</span>
                    </div>
                </div> --}}
                
                <div class="grid grid-cols-4 py-4 gap-4 overflow-y-auto px-4">
                    <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>

                    <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>

                    <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>

                    <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>

                    <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>

                    <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>

                    <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>
        
                    <div class="bg-white rounded-md shadow-lg overflow-hidden ">
                        <img class="w-full h-52 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    </div>

                </div>
            </div>
        </div>

    </div>
@stop
@extends('layout.app')

@section('content')
<div class="">
    <div class="pt-[200px] bg-gray-100 min-h-screen px-14 gap-4">

        <div class="mb-8">
            <div class="mb-8 flex justify-between">
                <div class="">
                    <div class="">
                        <span class="text-4xl font-bold text-slate-600">Donasi Barang yang Bermakna</span>
                    </div>
                    <div class="">
                        <span class="text-lg text-gray-600">Berikan barang-barang Anda untuk mendukung mereka yang membutuhkan, jadikan hari mereka lebih baik.</span>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-3 gap-4">
                <a href="#" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Gambar -->
                    <div class="w-full h-full">
                        <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image">
                    </div>
                    <!-- Konten -->
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Peralatan Medis</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Gambar -->
                    <div class="w-full h-full">
                        <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image">
                    </div>
                    <!-- Konten -->
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Produk Kebersihan</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Gambar -->
                    <div class="w-full h-full">
                        <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image">
                    </div>
                    <!-- Konten -->
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Donasi Pakaian</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Gambar -->
                    <div class="w-full h-full">
                        <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image">
                    </div>
                    <!-- Konten -->
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Makanan & Minuman</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Gambar -->
                    <div class="w-full h-full">
                        <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image">
                    </div>
                    <!-- Konten -->
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Barang Elektronik</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>

                <a href="#" class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Gambar -->
                    <div class="w-full h-full">
                        <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image">
                    </div>
                    <!-- Konten -->
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Penunjang Pendidikan</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="mb-8 pb-8">
            <div class="mb-8 flex justify-between">
                <div class="">
                    <div class="">
                        <span class="text-4xl font-semibold text-slate-600">Mari Bantu Mereka yang Membutuhkan</span>
                    </div>
                    <div class="">
                        <span class="text-lg">Menampilkan <b>12</b> campaign dari <b>142</b> campaign</span>
                    </div>
                </div>
    
                <div class="self-center"> 
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Category<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
    
            
            <div class="grid grid-cols-3 gap-8">
                <a href="{{route('donateDetails')}}" class="bg-white rounded-md shadow-lg overflow-hidden max-w-md ">
                    <img class="w-full h-48 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2">Keberkahan Jariyah, Tebar Al-Quran di Bumi Para Nabi</h2>
                        <p class="text-sm text-gray-700 mb-2">Ribuan warga terdampak hingga harus kehilangan nyawa. Ayo bantu segera!</p>
                        <hr class="my-4" />                  
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 my-1">
                            <div class="bg-blue-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
        
                        <div class="flex flex-wrap justify-between mt-1">
                            <div class="grid">
                                <span class="text-sm">Terkumpul</span>
                                <span class="text-xl font-bold">Rp. 8.000.000</span>
                            </div>
                            <div class="grid items-end">
                                <span class="text-sm">Sisa hari</span>
                                <span class="text-center text-xl font-bold">8</span>
                            </div>
                        </div>
                        <div class=""></div>
                    </div>
                </a>

                <div class="bg-white rounded-md shadow-lg overflow-hidden max-w-md">
                    <img class="w-full h-48 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2">Keberkahan Jariyah, Tebar Al-Quran di Bumi Para Nabi</h2>
                        <p class="text-sm text-gray-700 mb-2">Ribuan warga terdampak hingga harus kehilangan nyawa. Ayo bantu segera!</p>
                        <hr class="my-4" />                  
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 my-1">
                            <div class="bg-blue-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
        
                        <div class="flex flex-wrap justify-between mt-1">
                            <div class="grid">
                                <span class="text-sm">Terkumpul</span>
                                <span class="text-xl font-bold">Rp. 8.000.000</span>
                            </div>
                            <div class="grid items-end">
                                <span class="text-sm">Sisa hari</span>
                                <span class="text-center text-xl font-bold">8</span>
                            </div>
                        </div>
                        <div class=""></div>
                    </div>
                </div>

                <div class="bg-white rounded-md shadow-lg overflow-hidden max-w-md">
                    <img class="w-full h-48 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Tebar Al-Quran di Palestina">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2">Keberkahan Jariyah, Tebar Al-Quran di Bumi Para Nabi</h2>
                        <p class="text-sm text-gray-700 mb-2">Ribuan warga terdampak hingga harus kehilangan nyawa. Ayo bantu segera!</p>
                        <hr class="my-4" />                  
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 my-1">
                            <div class="bg-blue-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
        
                        <div class="flex flex-wrap justify-between mt-1">
                            <div class="grid">
                                <span class="text-sm">Terkumpul</span>
                                <span class="text-xl font-bold">Rp. 8.000.000</span>
                            </div>
                            <div class="grid items-end">
                                <span class="text-sm">Sisa hari</span>
                                <span class="text-center text-xl font-bold">8</span>
                            </div>
                        </div>
                        <div class=""></div>
                    </div>
                </div>
            </div>

            <nav class= "flex justify-center my-8">
                <ul class="flex items-center -space-x-px h-10 text-base">
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                        </a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>

            
        </div>
    </div>
</div>
@stop

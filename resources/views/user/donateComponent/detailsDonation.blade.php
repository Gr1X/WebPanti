@extends('layout.app')

@section('content')
<div class="pt-56 pb-20 w-full">
    <div class="flex justify-between px-8">
        <!-- Bagian Kiri -->
        <div class="">
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="" class="h-[25rem] w-[48rem] object-cover rounded-lg">
        </div>

        <!-- Bagian Kanan -->
        <div class="">
            <div>
                <h2 class="text-2xl font-bold uppercase">Keberkahan Jariyah, Tebar Al-Quran</h2>
                <p class="text-sm text-gray-700">Ribuan warga terdampak hingga harus kehilangan nyawa. Ayo bantu segera!</p>
            </div>

            <hr class="my-3 mb-6" />

            <div class="flex flex-wrap justify-between mt-1 my-6">
                <div class="grid w-full">
                    <div class="flex justify-between">
                        <span class="text-2xl font-bold">Rp. 8.000.000</span>
                        <span class="flex items-center gap-1 text-sm self-end">
                            <ion-icon name="people-outline" class="size-4"></ion-icon>200 Donatur
                        </span>
                    </div>

                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 my-1">
                        <div class="bg-blue-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%">45%</div>
                    </div>

                    <div class="flex justify-between">
                        <div class="grid items-end">
                            <span class="text-xs">40% terkumpul dari Rp 100.000.000</span>
                        </div>
                        <div class="grid items-end">
                            <span class="text-xs flex items-center gap-1">
                                <ion-icon name="time-outline"></ion-icon>12 hari lagi
                            </span>
                        </div>
                    </div>
                </div>

                <button class="bg-gradient-to-r from-cyan-500 to-blue-500 p-1.5 my-4 rounded text-center w-full uppercase font-bold hover:bg-gradient-to-r from-cyan-500 to-blue-500 text-white">
                    donasi sekarang
                </button>
            </div>

            <hr class="my-3 mb-6" />

            <div class="flex h-32 w-[35rem] gap-2 mx-auto overflow-x-auto">
                <img class="h-auto w-full transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 object-cover" 
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                <img class="h-auto w-full transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 object-cover" 
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
                <img class="h-auto w-full transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 object-cover" 
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
            </div>
        </div>

    </div>
    
    <div class="px-8 py-4">
        @include('donatecom.userfeed')
    </div>
</div>
@stop

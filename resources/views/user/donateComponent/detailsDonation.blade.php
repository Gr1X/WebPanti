@extends('layout.app')

@section('content')
    <div class="pt-56 pb-20 w-full">
        <div class="flex justify-between">
            <div class="px-8">
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="" class="h-[25rem] w-[48rem] object-cover rounded-lg">
                <div class="">

                </div>
            </div>

            <div class="mx-auto">
                <div class="p-5 pt-0">
                    <h2 class="text-2xl font-bold mb-2 uppercase">Keberkahan Jariyah, Tebar Al-Quran</h2>
                    <p class="text-sm text-gray-700 mb-2">Ribuan warga terdampak hingga harus kehilangan nyawa. Ayo bantu segera!</p>
                    <hr class="my-4" />                  
                </div>
                
                <hr class="mx-4 my-4"/>

                <div class="flex flex-wrap justify-between mt-1 mb-4">
                    <div class="grid w-full">
                        <div class="flex">
                            <span class="text-2xl font-bold">Rp. 8.000.000</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 my-1">
                            <div class="bg-blue-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
                        <div class="flex justify-between">
                            <div class="grid items-end">
                                <span class="text-xs"> 40% terkumpul dari Rp 100.000.000</span>
                            </div>
                            <div class="grid items-end">
                                <span class="text-sm">Sisa hari</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="bg-sky-200 p-1.5 rounded text-center w-full uppercase font-bold">donasi sekarang</button>
            </div>
        </div>
    </div>
@stop
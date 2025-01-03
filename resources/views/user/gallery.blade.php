@extends('layout.app')

@section('content')
    <div class="bg-custom-400 min-h-screen px-5 lg:px-10 gap-2">
        <div class="pt-16 w-full pt-44 lg:pt-44 mb-8">
            <div class="bg-custom-50 dark:bg-custom-50 border border-custom-50 dark:border-custom-50 rounded-lg p-8 md:pt-16 md:p-12">
                <h1 class="text-custom-500 dark:text-custom-500 text-4xl md:text-5xl font-semibold mb-2">Gallery</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                    
                </p>
            </div>
        </div>

        <!-- Section Gallery -->
        <div class="mt-2 mb-16">
            <div class="flex h-auto">
                <!-- Filter Tahun -->
                <div class="grid w-36 md:w-72 h-full bg-custom-75 gap-2 py-10 rounded-lg self-start">
                    <a href="{{ url()->current() }}?year=2019" 
                    class="bg-custom-100 text-white m-2 rounded-lg p-2 text-center {{ request('year') == '2019' ? 'bg-custom-50' : '' }}">
                        2019
                    </a>
                    <a href="{{ url()->current() }}?year=2020" 
                    class="bg-custom-100 text-white m-2 rounded-lg p-2 text-center {{ request('year') == '2020' ? 'bg-custom-50' : '' }}">
                        2020
                    </a>
                    <a href="{{ url()->current() }}?year=2021" 
                    class="bg-custom-100 text-white m-2 rounded-lg p-2 text-center {{ request('year') == '2021' ? 'bg-custom-50' : '' }}">
                        2021
                    </a>
                    <a href="{{ url()->current() }}?year=2022" 
                    class="bg-custom-100 text-white m-2 rounded-lg p-2 text-center {{ request('year') == '2022' ? 'bg-custom-50' : '' }}">
                        2022
                    </a>
                    <a href="{{ url()->current() }}?year=2023" 
                    class="bg-custom-100 text-white m-2 rounded-lg p-2 text-center {{ request('year') == '2023' ? 'bg-custom-50' : '' }}">
                        2023
                    </a>
                    <a href="{{ url()->current() }}?year=2024" 
                    class="bg-custom-100 text-white m-2 rounded-lg p-2 text-center {{ request('year') == '2024' ? 'bg-custom-50' : '' }}">
                        2024
                    </a>
                    <a href="{{ url()->current() }}?year=2025" 
                    class="bg-custom-100 text-white m-2 rounded-lg p-2 text-center {{ request('year') == '2025' ? 'bg-custom-50' : '' }}">
                        2025
                    </a>
                </div>

                <!-- Gallery Gambar -->
                <div class="flex-1 max-h-[28rem] overflow-y-auto">
                    @if($galleries->isEmpty())
                        <!-- Jika tidak ada gambar -->
                        <div class="w-full flex justify-center items-center mx-16">
                            <div class="grid">
                                <ion-icon name="image-outline" class="size-64 text-custom-200"></ion-icon>
                                <span class="text-4xl font-semibold text-center">No Image</span>
                            </div>
                        </div>
                    @else
                        <!-- Jika ada gambar -->
                        <div class="grid grid-cols-1 md:grid-rows-2 lg:grid-cols-3 py-4 gap-4 px-4">
                            @foreach ($galleries as $gallery)
                                <div class="bg-white rounded-md shadow-lg overflow-hidden w-full">
                                    <img 
                                        class="w-full h-52 object-cover" 
                                        src="{{ asset('storage/' . $gallery->gambar) }}" 
                                        alt="{{ $gallery->gambar }}"
                                    >
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

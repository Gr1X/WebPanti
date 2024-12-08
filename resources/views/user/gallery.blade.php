@extends('layout.app')

@section('content')
    <div class="bg-gray-100 min-h-screen px-14 gap-2">
        <div class="pt-16 w-full lg:pt-44 mb-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:pt-16 md:p-12">
                <h1 class="text-gray-900 dark:text-white text-4xl md:text-5xl font-semibold mb-2">Story & Gallery</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                    Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers.
                </p>
            </div>
        </div>

        <!-- Section Gallery -->
        <div class="my-2">
            <div class="flex items-center my-4">
                <h1 class="text-4xl">Gallery</h1>
            </div>

            <div class="flex">
                <!-- Filter Tahun (Hardcoded HTML) -->
                <div class="grid w-72 h-full bg-slate-700 gap-2 py-10 rounded-lg self-center">
                    <a href="{{ url()->current() }}?year=2019" 
                       class="bg-sky-800 text-white m-2 rounded-t-lg p-2 text-center {{ request('year') == '2019' ? 'bg-sky-900' : '' }}">
                        2019
                    </a>
                    <a href="{{ url()->current() }}?year=2020" 
                       class="bg-sky-800 text-white m-2 rounded-t-lg p-2 text-center {{ request('year') == '2020' ? 'bg-sky-900' : '' }}">
                        2020
                    </a>
                    <a href="{{ url()->current() }}?year=2021" 
                       class="bg-sky-800 text-white m-2 rounded-t-lg p-2 text-center {{ request('year') == '2021' ? 'bg-sky-900' : '' }}">
                        2021
                    </a>
                    <a href="{{ url()->current() }}?year=2022" 
                       class="bg-sky-800 text-white m-2 rounded-t-lg p-2 text-center {{ request('year') == '2022' ? 'bg-sky-900' : '' }}">
                        2022
                    </a>
                    <a href="{{ url()->current() }}?year=2023" 
                       class="bg-sky-800 text-white m-2 rounded-t-lg p-2 text-center {{ request('year') == '2023' ? 'bg-sky-900' : '' }}">
                        2023
                    </a>
                    <a href="{{ url()->current() }}?year=2024" 
                       class="bg-sky-800 text-white m-2 rounded-t-lg p-2 text-center {{ request('year') == '2024' ? 'bg-sky-900' : '' }}">
                        2024
                    </a>
                </div>

                <!-- Gallery Gambar -->
                @if($galleries->isEmpty())
                    <!-- Jika tidak ada gambar -->
                    <div class="w-full flex justify-center items-center bg-slate-100">
                        <div class="grid">
                            <ion-icon name="image-outline" class="size-72"></ion-icon>
                            <span class="text-4xl font-semibold text-center">No Image</span>
                        </div>
                    </div>
                @else
                    <!-- Jika ada gambar -->
                    <div class="grid grid-cols-4 py-4 gap-4 overflow-y-auto px-4">
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
@stop

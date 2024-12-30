@extends('layout.app')

@section('content')
    <div class="">
        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6 py-4">
            <!-- Card: Tenaga Kesehatan -->
            <div class="relative grid h-[35rem] max-w-lg flex-col items-end justify-center overflow-hidden rounded-lg bg-white shadow-lg transition-transform transform hover:scale-105">
                <!-- Background Image -->
                <div class="absolute inset-0 m-0 h-full w-full bg-cover bg-center" 
                    style="background-image: url('/images/tenaga-kesehatan.jpg');">
                    <div class="absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
                </div>
                <!-- Content -->
                <div class="relative text-center p-6 px-6 py-14 md:px-12">
                    <ion-icon
                        name="medical-outline"
                        class="text-6xl text-white bg-custom-200 p-4 rounded-full mb-4 border border-white">
                    </ion-icon>
                    <h2 class="mb-6 text-3xl font-medium text-white">Tenaga Kesehatan</h2>
                    <p class="mb-6 text-lg text-gray-300">
                        Bergabung sebagai tenaga kesehatan untuk membantu masyarakat mendapatkan layanan medis.
                    </p>
                    <a href="{{ route('program.volunteer.registerForm', 'kesehatan') }}" class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
            

            <!-- Card: Tenaga Pendidikan -->
            <div class="relative grid h-[35rem] max-w-lg flex-col items-end justify-center overflow-hidden rounded-lg bg-white shadow-lg transition-transform transform hover:scale-105">
                <!-- Background Image -->
                <div class="absolute inset-0 m-0 h-full w-full bg-[url('https://images.unsplash.com/photo-1584697964407-0fbc8896a989?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80')] bg-cover bg-center">
                    <div class="absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
                </div>
                <!-- Content -->
                <div class="relative text-center p-6 px-6 py-14 md:px-12">
                    <ion-icon
                        name="school-outline"
                        class="text-6xl text-white bg-custom-200 p-4 rounded-full mb-4 border border-white">
                    </ion-icon>
                    <h2 class="mb-6 text-3xl font-medium text-white">Tenaga Pendidikan</h2>
                    <p class="mb-6 text-lg text-gray-300">
                        Jadilah tenaga pendidikan untuk membantu anak-anak mendapatkan hak pendidikan mereka.
                    </p>
                    <a href="{{ route('program.volunteer.registerForm', 'pendidikan') }}" class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <!-- Card: Tenaga Sosial -->
            <div class="relative grid h-[35rem] max-w-lg flex-col items-end justify-center overflow-hidden rounded-lg bg-white shadow-lg transition-transform transform hover:scale-105">
                <!-- Background Image -->
                <div class="absolute inset-0 m-0 h-full w-full bg-[url('https://images.unsplash.com/photo-1527657162203-6476d3986b88?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80')] bg-cover bg-center">
                    <div class="absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
                </div>
                <!-- Content -->
                <div class="relative text-center p-6 px-6 py-14 md:px-12">
                    <ion-icon
                        name="people-outline"
                        class="text-6xl text-white bg-custom-200 p-4 rounded-full mb-4 border border-white">
                    </ion-icon>
                    <h2 class="mb-6 text-3xl font-medium text-white">Tenaga Sosial</h2>
                    <p class="mb-6 text-lg text-gray-300">
                        Bantu kami sebagai tenaga sosial untuk membantu masyarakat yang membutuhkan.
                    </p>
                    <a href="{{ route('program.volunteer.registerForm', 'sosial') }}" class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop

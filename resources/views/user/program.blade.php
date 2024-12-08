@extends('layout.app')

@section('content')
    <div class="bg-gray-100 min-h-screen px-14">
        <div class="pt-16 w-full lg:pt-44 mb-8">
            <div class="bg-white border border-lightGreen rounded-lg p-8 md:pt-16 md:p-12">
                <h1 class="text-greenPrimary text-4xl md:text-5xl font-semibold mb-2">Program</h1>
                <p class="text-yellowAccent text-lg font-normal mb-6">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools...</p>
            </div>
        </div>

        <div class="my-8">
            <div class="grid grid-cols-3 gap-2">
                <!-- Card 1 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="heart-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Santunan Pekanan</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <!-- Card 2 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="book-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Lescalistung</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <!-- Card 3 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="language-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Les Bahasa Inggris</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                        <!-- Card 4 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="people-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Doa Bersama</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <!-- Center Card (Logo / Highlight) -->
                <div class="relative min-h-80 w-full flex flex-col justify-center items-center bg-gradient-to-r from-greenPrimary to-greenDark text-white shadow-lg border border-lightGreen rounded-lg p-6">
                    <ion-icon name="home-outline" class="text-white w-16 h-16 mb-4 z-10"></ion-icon>
                    <h2 class="text-3xl font-bold z-10">Yayasan Nurul Jadid</h2>
                    <p class="text-white/80 text-base mt-2 text-center z-10">Membangun generasi Islami dengan pendidikan, kesehatan, dan sosial ekonomi.</p>
                </div>

                    <!-- Card 5 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="school-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Beasiswa Pendidikan & Dhuafa</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="cash-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Pemberdayaan Ekonomi Wali Yatim</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="nutrition-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Program Peningkatan Gizi</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-lightGreen rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="medical-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-greenPrimary text-2xl font-semibold z-10">Program Bantuan Kesehatan</h5>
                    <p class="text-yellowAccent text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>
            </div>
        </div>  
        
        <div class="">
            
            <div class="bg-blue-50 py-10 px-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-slate-800 mb-6 text-center">Bergabung Sebagai Relawan</h2>
                <p class="text-gray-600 text-center max-w-2xl mx-auto mb-8">
                    Jadilah bagian dari kami untuk membantu masyarakat yang membutuhkan. Bergabunglah sebagai relawan dan buat perubahan nyata bersama kami.
                </p>
                <div class="flex justify-center">
                    <a href="/daftar-relawan" class="bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow hover:bg-blue-600 transition">Daftar Sekarang</a>
                </div>
            </div>

            <div class="bg-gray-100 py-10 px-6">
                <!-- Bagian Berita Program Lengkap -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-slate-800 mb-6 text-center">Berita Program</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition">
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Berita 1" class="rounded-t-lg h-40 w-full object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-slate-800 mb-2">Judul Berita 1</h3>
                                <p class="text-gray-600 mb-4">Deskripsi singkat tentang berita program yang menarik...</p>
                                <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition">
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Berita 2" class="rounded-t-lg h-40 w-full object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-slate-800 mb-2">Judul Berita 2</h3>
                                <p class="text-gray-600 mb-4">Deskripsi singkat tentang berita program yang menarik...</p>
                                <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition">
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Berita 3" class="rounded-t-lg h-40 w-full object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-slate-800 mb-2">Judul Berita 3</h3>
                                <p class="text-gray-600 mb-4">Deskripsi singkat tentang berita program yang menarik...</p>
                                <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@stop
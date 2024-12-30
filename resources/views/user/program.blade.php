@extends('layout.app')

@section('content')
    <div class="bg-custom-400 min-h-screen px-14">
        <div class="pt-16 w-full lg:pt-44 mb-8">
            <div class="bg-custom-50 border border-custom-50 rounded-lg p-8 md:pt-16 md:p-12">
                <h1 class="text-custom-500 text-4xl md:text-5xl font-semibold mb-2">Program</h1>
                <p class="text-yellowAccent text-lg font-normal mb-6"></p>
            </div>
        </div>

        <div class="my-8">
            <div class="grid grid-cols-3 gap-2">
                <!-- Card 1 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="heart-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Santunan Pekanan</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <!-- Card 2 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="book-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Lescalistung</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <!-- Card 3 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="language-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Les Bahasa Inggris</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                        <!-- Card 4 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="people-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Doa Bersama</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <!-- Center Card (Logo / Highlight) -->
                <div class="relative min-h-80 w-full flex flex-col justify-center items-center bg-gradient-to-r from-custom-50 to-greenDark text-white shadow-lg border border-lightGreen rounded-lg p-6">
                    <ion-icon name="home-outline" class="text-white w-16 h-16 mb-4 z-10"></ion-icon>
                    <h2 class="text-3xl font-bold z-10">Yayasan Nurul Jadid</h2>
                    <p class="text-white/80 text-base mt-2 text-center z-10">Membangun generasi Islami dengan pendidikan, kesehatan, dan sosial ekonomi.</p>
                </div>

                    <!-- Card 5 -->
                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="school-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Beasiswa Pendidikan & Dhuafa</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="cash-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Pemberdayaan Ekonomi Wali Yatim</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="nutrition-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Program Peningkatan Gizi</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>

                <div class="relative min-h-60 w-full flex flex-col justify-center items-center bg-white/40 backdrop-blur-lg shadow-lg border border-custom-50 rounded-lg p-6">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent rounded-lg pointer-events-none"></div>
                    <ion-icon name="medical-outline" class="text-greenDark w-10 h-10 mb-4 z-10"></ion-icon>
                    <h5 class="text-custom-50 text-2xl font-semibold z-10">Program Bantuan Kesehatan</h5>
                    <p class="text-custom-50 text-sm mt-2 text-center z-10">No APIs created yet. Contact us for more details.</p>
                </div>
            </div>
        </div>  
        
        <div class="">
            <div class="bg-custom-400 py-12 px-8 rounded-lg shadow-lg relative overflow-hidden">
                <!-- Background Decoration -->
                <div class="absolute inset-0 bg-gradient-to-r from-custom-50 to-custom-100 opacity-10 z-0"></div>
            
                <!-- Content Section -->
                <div class="relative z-10 text-center">
                    <h2 class="text-4xl font-bold text-custom-50 mb-4">Bergabung Sebagai Relawan</h2>
                    <p class="text-custom-200 text-lg max-w-2xl mx-auto mb-6">
                        Jadilah bagian dari kami untuk membantu masyarakat yang membutuhkan. Bergabunglah sebagai relawan dan buat perubahan nyata bersama kami.
                    </p>
            
                    <div class="flex justify-center">
                        <a href="{{ route('relawan') }}" 
                            class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-transform transform hover:scale-105">
                            Daftar Sekarang
                        </a>
                        <!-- Modal toggle -->
                        <button data-modal-target="volunteer-modal" data-modal-toggle="volunteer-modal" class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-transform transform hover:scale-105" type="button">
                            Toggle modal
                        </button>
                    </div>
                </div>
                
                <!-- Main modal -->
                <div id="volunteer-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Static modal
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="volunteer-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                </p>
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                </p>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decorative Elements -->
                <div class="absolute -top-10 -right-10 bg-custom-100 rounded-full h-40 w-40 opacity-30"></div>
                <div class="absolute -bottom-10 -left-10 bg-custom-300 rounded-full h-48 w-48 opacity-30"></div>
            </div>

            <div class="py-10 px-6">
                <!-- Bagian Berita Program -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-custom-50 mb-6 text-center">Berita Program</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-custom-100 shadow-lg rounded-lg hover:scale-105 transform transition duration-300">
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Berita 1" class="rounded-t-lg h-40 w-full object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-custom-50 mb-2">Judul Berita 1</h3>
                                <p class="text-custom-50 text-opacity-80 mb-4">Deskripsi singkat tentang berita program yang menarik...</p>
                                <a href="{{route('programDetails')}}" class="text-custom-500 font-semibold hover:underline">Read More</a>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-custom-100 shadow-lg rounded-lg hover:scale-105 transform transition duration-300">
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Berita 2" class="rounded-t-lg h-40 w-full object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-custom-50 mb-2">Judul Berita 2</h3>
                                <p class="text-custom-50 text-opacity-80 mb-4">Deskripsi singkat tentang berita program yang menarik...</p>
                                <a href="#" class="text-custom-500 font-semibold hover:underline">Read More</a>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-custom-100 shadow-lg rounded-lg hover:scale-105 transform transition duration-300">
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Berita 3" class="rounded-t-lg h-40 w-full object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-custom-50 mb-2">Judul Berita 3</h3>
                                <p class="text-custom-50 text-opacity-80 mb-4">Deskripsi singkat tentang berita program yang menarik...</p>
                                <a href="#" class="text-custom-500 font-semibold hover:underline">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@stop
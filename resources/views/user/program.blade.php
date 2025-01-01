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
                        <!-- Modal toggle -->
                        <button data-modal-target="volunteer-modal" data-modal-toggle="volunteer-modal" class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition-transform transform hover:scale-105" type="button">
                            Daftar sebagai Relawan
                        </button>
                    </div>
                </div>
                
                <!-- Main modal -->
                <div id="volunteer-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-end w-full md:inset-0 h-[calc(100%-1rem)] max-h-full mt-10">
                    <div class="relative p-4 w-full max-w-6xl max-h-full">

                        <!-- Modal content -->
                        <div class="relative bg-transparent rounded-xl">
                            <!-- Modal header -->
                            <div class="flex justify-start items-center mb-4">
                                <button class="text-lg font-semibold flex items-center my-4 ms-auto py-2 px-2 rounded-xl text-gray-700 bg-gray-200 shadow border-gray-100" data-modal-hide="volunteer-modal">
                                    <ion-icon name="close" class=" text-xl size-8 text-red-400"></ion-icon>
                                </button>
                            </div>

                            <!-- Modal Body -->
                            <div class="space-y-4">
                                <!-- Kartu di dalam modal -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6 py-2">
                                    <!-- Kartu 1 -->
                                    <a href="{{ route('program.volunteer.registerForm', 'pendidikan') }}" class="relative grid h-[32rem] max-w-lg flex-col items-end justify-center overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-500 opacity-0 transform translate-y-6">
                                        <div class="absolute inset-0 m-0 h-full w-full bg-[url('/public/images/guru.png')] bg-cover bg-center rounded-2xl">
                                            <div class="absolute inset-0 h-full w-full bg-gradient-to-t from-custom-75/100 via-custom-50/30 hover:from-custom-75/100 hover:via-custom-50/50"></div>
                                        </div>
                                        <div class="relative text-center px-6 pt-14 pb-4">
                                            <ion-icon name="school-outline" class="text-6xl text-white bg-custom-200 p-4 rounded-full mb-4 shadow"></ion-icon>
                                            <h2 class="mb-6 text-2xl font-semibold text-white">Tenaga Pendidikan</h2>
                                        </div>
                                    </a>

                                    <!-- Kartu 2 -->
                                    <a href="{{ route('program.volunteer.registerForm', 'sosial') }}" class="relative grid h-[32rem] max-w-lg flex-col items-end justify-center overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-500 opacity-0 transform translate-y-6">
                                        <div class="absolute inset-0 m-0 h-full w-full bg-[url('/public/images/sosial2.jpeg')] bg-cover bg-center rounded-2xl">
                                            <div class="absolute inset-0 h-full w-full bg-gradient-to-t from-custom-75/100 via-custom-50/30 hover:from-custom-75/100 hover:via-custom-50/50"></div>
                                        </div>
                                        <div class="relative text-center px-6 pt-14 pb-4">
                                            <ion-icon name="people-outline" class="text-6xl text-white bg-custom-200 p-4 rounded-full mb-4 shadow"></ion-icon>
                                            <h2 class="mb-6 text-2xl font-semibold text-white">Tenaga Sosial</h2>
                                        </div>
                                    </a>

                                    <!-- Kartu 3 -->
                                    <a href="{{ route('program.volunteer.registerForm', 'kesehatan') }}" class="relative grid h-[32rem] max-w-lg flex-col items-end justify-center overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-500 opacity-0 transform translate-y-6">
                                        <div class="absolute inset-0 m-0 h-full w-full bg-[url('/public/images/dokter.jpg')] bg-cover bg-center rounded-2xl">
                                            <div class="absolute inset-0 h-full w-full bg-gradient-to-t from-custom-75/100 via-custom-50/30 hover:from-custom-75/100 hover:via-custom-50/50"></div>
                                        </div>
                                        <div class="relative text-center px-6 pt-14 pb-4">
                                            <ion-icon name="medical-outline" class="text-6xl text-white bg-custom-200 p-4 rounded-full mb-4 shadow"></ion-icon>
                                            <h2 class="mb-6 text-2xl font-semibold text-white">Tenaga Kesehatan</h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decorative Elements -->
                <div class="absolute -top-10 -right-10 bg-custom-100 rounded-full h-40 w-40 opacity-30"></div>
                <div class="absolute -bottom-10 -left-10 bg-custom-300 rounded-full h-48 w-48 opacity-30"></div>
            </div>

            <div class="mt-10">
                <!-- Bagian Berita Program -->
                <div class="mb-8">
                    <h2 class="text-4xl font-bold text-custom-50 mb-6">Berita Program</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($berita as $item)
                            <div class="bg-custom-100 shadow-lg rounded-lg">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="rounded-t-lg h-60 w-full object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-custom-50 mb-2">{{ $item->judul }}</h3>
                                    <p class="text-custom-50 text-opacity-80 mb-4">{{ Str::limit($item->deskripsi, 100) }}</p>
                                    <div class="w-full flex justify-end">
                                        <a href="" class="m-2 hover:underline text-white">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('volunteer-modal');
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle="volunteer-modal"]');
        const closeModalButton = modal.querySelector('[data-modal-hide="volunteer-modal"]');
        const cards = modal.querySelectorAll('.grid a');

        // Fungsi animasi fade-in
        function animateCardsFadeIn() {
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('opacity-100', 'translate-y-0');
                    card.classList.remove('opacity-0', 'translate-y-6');
                }, index * 200); // Delay tiap kartu
            });
        }

        // Fungsi animasi fade-out
        function animateCardsFadeOut() {
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('opacity-0', 'translate-y-6');
                    card.classList.remove('opacity-100', 'translate-y-0');
                }, index * 100); // Delay tiap kartu
            });
        }

        // Buka modal
        modalToggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modal.classList.add('opacity-100');
                    animateCardsFadeIn();
                }, 50);
            });
        });

        // Tutup modal
        closeModalButton.addEventListener('click', () => {
            animateCardsFadeOut();
            setTimeout(() => {
                modal.classList.add('opacity-0');
                modal.classList.remove('opacity-100');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }, 300);
            }, 300);
        });
    });
</script>
@stop
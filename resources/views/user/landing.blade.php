@extends('layout.app')

@section('content')
<main class="">
    <div class="bg-custom-400 py-32">
        <div class="flex justify-between">
            <div class="self-center ms-10 w-full mt-20 z-10">
                <div class="items-center mb-12 h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-20 border border-custom-50 p-4 shadow-lg">
                    <p class="text-custom-50 text-sm">Profil</p>
                    <h1 class="text-custom-50 text-3xl font-semibold mb-4">Yayasan Nurul Jadid</h1>
                    <hr class="my-2 border-custom-50"/>
                    <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                </div>

                <div class="items-center mb-12 h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-custom-50 p-4 shadow-lg">
                    <p class="text-custom-50 text-sm">Visi & Misi</p>
                    <h1 class="text-custom-50 text-3xl font-semibold mb-4">Visi</h1>
                    <hr class="my-2 border-custom-50"/>
                    <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                </div>
            </div>

            <div class="py-8 mx-56 gap-2 flex justify-center ">
                <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 translate-x-[-400px] translate-y-[-250px] shadow-4xl rotate-[-10deg] drop-shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100"></div>
                </div>

                <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 translate-x-[-225px] translate-y-12 z-20 shadow-4xl rotate-[4deg] shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100"></div>
                </div>
                
                <div class="self-end w-[26rem] h-[28rem] bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl z-10 rotate-[-2deg]">
                    <div class="duration-500 contrast-50 h-80 bg-black hover:contrast-100"></div>
                </div>

                <div class="absolute self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[200px] translate-y-16 z-10 shadow-2xl rotate-[-5deg] z-20">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100"></div>
                </div> 

                <div class="absolute self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[-300px] translate-y-[-200px] shadow-2xl rotate-[5deg]">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100"></div>
                </div> 

                <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[325px] translate-y-[225px] shadow-4xl rotate-[6deg] shadow-2xl z-10">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100"></div>
                </div>
            </div>    
        </div> 

        <div class="">
            <div class="grid grid-cols-2 gap-10 px-10">
                <div class="items-center h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-custom-50 p-4 shadow-lg">
                    <p class="text-custom-50 text-sm">Visi & Misi</p>
                    <h1 class="text-custom-50 text-3xl font-semibold mb-4">Misi</h1>
                    <hr class="my-2" />
                    <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                </div>

                <div class="items-center h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-custom-50 p-4 shadow-lg">
                    <p class="text-custom-50 text-sm">Siapa Kami?</p>
                    <h1 class="text-custom-50 text-3xl font-semibold mb-4">Yayasan Nurul Jadid</h1>
                    <hr class="my-2 border-custom-50"/>
                    <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                </div>
            </div>
        </div>
        
    </div>

    <div class="">
        <div class="relative bg-slate-800 text-white">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img
                    src="your-image-path.jpg"
                    alt="Background"
                    class="w-full h-64 object-cover opacity-50"
                />
            </div>
        
            <!-- Content -->
            <div class="h-full w-full bg-custom-50 bg-clip-padding backdrop-filter backdrop-blur-sm text-center z-10 text-slate-100 py-4">
                <!-- Title Section -->
                <h2 class="text-5xl font-bold text-custom-500">Berita Panti</h2>
            </div>
        </div>

        <div id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-80 my-8 mx-20 bg-slate-500">
                <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        
        <div class="grid grid-cols-2 gap-6 py-8 px-6">
            <div class="relative flex flex-col md:flex-row bg-white shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden border border-gray-200">
                <div class="md:w-2/5">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Card Image" class="object-cover h-full w-full">
                </div>
                <div class="p-6 flex flex-col justify-between">
                    <h4 class="text-slate-800 text-xl font-bold">Kegiatan Sosial Desa Binaan</h4>
                    <p class="text-gray-600 text-sm mt-2">Meningkatkan kesejahteraan masyarakat desa melalui pelatihan keterampilan.</p>
                    <a href="#" class="text-greenPrimary text-sm font-semibold hover:underline mt-4 flex items-center">
                        Baca Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative flex flex-col md:flex-row bg-white shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden border border-gray-200">
                <div class="md:w-2/5">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Card Image" class="object-cover h-full w-full">
                </div>
                    <div class="p-6 flex flex-col justify-between">
                        <h4 class="text-slate-800 text-xl font-bold">Kegiatan Sosial Desa Binaan</h4>
                        <p class="text-gray-600 text-sm mt-2">Meningkatkan kesejahteraan masyarakat desa melalui pelatihan keterampilan.</p>
                        <a href="#" class="text-greenPrimary text-sm font-semibold hover:underline mt-4 flex items-center">
                            Baca Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div> 
        </div>

    <div class="">
        <div class="bg-greenPrimary py-10">
            <div class="grid grid-cols-3 items-center text-white px-10 divide-x divide-white">
                <!-- Campaign -->
                <div class="flex flex-col items-center text-center px-4">
                    <ion-icon name="hand-right-outline" class="text-white w-16 h-16 mb-4"></ion-icon>
                    <h2 class="text-4xl font-bold">969</h2>
                    <p class="text-lg font-semibold mt-2">CAMPAIGN</p>
                </div>
        
                <!-- Donasi Terkumpul -->
                <div class="flex flex-col items-center text-center px-4">
                    <ion-icon name="cash-outline" class="text-white w-16 h-16 mb-4"></ion-icon>
                    <h2 class="text-4xl font-bold">172.944.347.446</h2>
                    <p class="text-lg font-semibold mt-2">DONASI TERKUMPUL</p>
                </div>
        
                <!-- Transaksi Campaign -->
                <div class="flex flex-col items-center text-center px-4">
                    <ion-icon name="card-outline" class="text-white w-16 h-16 mb-4"></ion-icon>
                    <h2 class="text-4xl font-bold">440.746</h2>
                    <p class="text-lg font-semibold mt-2">TRANSAKSI CAMPAIGN</p>
                </div>
            </div>
        </div>
        

        <div class="flex justify-center relative">
            <!-- Optional Heading -->
            <div class="absolute font-semibold">
                {{-- <h1 class="text-[10rem] text-center text-slate-500 opacity-10">Gallery</h1> --}}
            </div>
        </div>
        
        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 my-10 mx-6 md:mx-20">
            <!-- Image 1 -->
            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
            </div>
        
            <!-- Image 2 -->
            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="Gallery Image 2">
            </div>
        
            <!-- Image 3 -->
            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="Gallery Image 3">
            </div>
        
            <!-- Image 4 -->
            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="Gallery Image 4">
            </div>
        </div>
        
        <!-- See More Button -->
        <div class="flex justify-center my-4">
            <a href="/gallery" class="bg-slate-700 text-white font-semibold border rounded-full px-10 py-4 transition duration-300 hover:bg-slate-600 hover:shadow-lg">
                See More
            </a>
        </div>
        
    </div>
    
    <div class="flex justify-between items-center relative h-56 overflow-hidden rounded-lg md:h-64 my-8 mx-40 bg-gradient-to-r from-custom-100 via-custom-100 to-custom-50 shadow-lg">
        <!-- Left Content -->
        <div class="ml-8">
            <h1 class="text-4xl font-bold text-custom-50">Mari Berdonasi</h1>
            <p class="text-custom-50 text-lg mt-2 font-light">Bantu mereka mendapatkan kehidupan yang lebih baik.</p>
        </div>
    
        <!-- Right Button -->
        <div class="flex h-full items-end">
            <a href="/donate" class="text-[1rem] font-bold bg-yellow-400 hover:bg-yellow-500 transition-all px-12 py-4 m-10 text-custom-50 rounded-lg shadow-md">
                Donasi Sekarang
            </a>
        </div>
    
        <!-- Background Shape (Optional) 
        <div class="absolute inset-0 opacity-20">
            <img src="https://via.placeholder.com/800x400" alt="Background" class="w-full h-full object-cover">
        </div>-->
    </div>
    
</main>
@stop
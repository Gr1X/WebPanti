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
                    <p>Peduli dengan yatim piatu & dhuafa "menggapai keberkahan dengan memuliakan generasi "</p>
                </div>

                <div class="items-center mb-12 h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-custom-50 p-4 shadow-lg">
                    <p class="text-custom-50 text-sm">Visi & Misi</p>
                    <h1 class="text-custom-50 text-3xl font-semibold mb-4">Visi</h1>
                    <hr class="my-2 border-custom-50"/>
                    <p>Menjadi lembaga sosisal terpercaya, amanah, dan peduli, dan berkontribusi dalam mewujudkan sumber daya manusia yang kreatif, inovatif, mandiri, dan berkarakter mulia.</p>
                </div>
            </div>

            <div class="py-8 mx-56 gap-2 flex justify-center ">
                <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 translate-x-[-400px] translate-y-[-250px] shadow-4xl rotate-[-10deg] drop-shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/1.jpg" alt="gambar1" class="">
                    </div>
                </div>

                <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 translate-x-[-225px] translate-y-12 z-20 shadow-4xl rotate-[4deg] shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/5.jpg" alt="gambar2" class="">
                    </div>
                </div>
                
                <div class="self-end w-[26rem] h-[28rem] bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl z-10 rotate-[-2deg]">
                    <div class="duration-500 contrast-50 h-80 bg-black hover:contrast-100">
                        <img src="./images/1.jpg" alt="gambar3" class="">
                    </div>
                </div>

                <div class="absolute self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[200px] translate-y-16 z-10 shadow-2xl rotate-[-5deg] z-20">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 

                <div class="absolute self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[-300px] translate-y-[-200px] shadow-2xl rotate-[5deg]">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100">
                        <img src="./images/2.jpg" alt="gambar5" class="">
                    </div>
                </div> 

                <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[325px] translate-y-[225px] shadow-4xl rotate-[6deg] shadow-2xl z-10">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/6.jpg" alt="gambar6" class="">
                    </div>
                </div>
            </div>    
        </div> 

        <div class="">
            <div class="grid grid-cols-2 gap-10 px-10">
                <div class="items-center h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-custom-50 p-4 shadow-lg">
                    <p class="text-custom-50 text-sm">Visi & Misi</p>
                    <h1 class="text-custom-50 text-3xl font-semibold mb-4">Misi</h1>
                    <hr class="my-2" />
                    <p>1. Menididk generasi muda melalui pendidikan formal maupun non formal sehingga menjadi generasi yang kreatif, inovatif dan mandiri.<br/>
                    2. Menyelenggarakan kegiatan sosial yang aktif  dan berdimensi rahmatan lil a'lamim.<br/>
                    3. Mengembangkan potensi usaha masyarakat sekitar sehingga mampu menjadi masyarakat yang sejahtera dan mandiri.<br/>
                    4. Mengelola sumber-sumber dana secara jujur dan amanah mendistribusikannya kepada anak yatim.</p>
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
        <div class="relative h-64 bg-cover bg-center">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-green-900 bg-opacity-60"></div>
            <!-- Content -->
            <div class="mt-36 gap-4">
                <img src="./images/banner2.png" alt="banner2" class="w-full h-full object-cover">
            </div>
            <div class="relative z-10 flex items-center justify-center px-10 h-full">
                <div class="text-white">
                    <h1 class="text-4xl font-bold">Berita Panti</h1>
                </div>
            </div>
        </div>        
    </div>

    <div class="">
        <div id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-80 my-8 mx-20">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
                        alt="Gambar 1" 
                        class="absolute w-full h-full object-cover">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" 
                        alt="Gambar 2" 
                        class="absolute w-full h-full object-cover">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" 
                        alt="Gambar 3" 
                        class="absolute w-full h-full object-cover">
                </div>
            </div>
        
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700/30 group-hover:bg-gray-700/50">
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700/30 group-hover:bg-gray-700/50">
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9l4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>        
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
        <div class="bg-custom-50 py-10">
            <div class="grid grid-cols-3 items-center text-white px-10 divide-x divide-custom-400">
                <!-- count tabel target -->
                <div class="flex flex-col items-center text-center px-4">
                    <ion-icon name="hand-right-outline" class="text-custom-200 w-16 h-16 mb-4"></ion-icon>
                    <h2 class="text-4xl font-bold text-custom-500">{{ $totalTarget }}</h2>
                    <p class="text-lg font-semibold mt-2 text-custom-400">CAMPAIGN</p>
                </div>

                <!-- sum kolom jumlah pada tabel donasi -->
                <div class="flex flex-col items-center text-center px-4">
                    <ion-icon name="cash-outline" class="text-custom-200 w-16 h-16 mb-4"></ion-icon>
                    <h2 class="text-4xl font-bold text-custom-500">Rp. {{ number_format($totalDonasiTerkumpul, 0, ',', '.') }}</h2>
                    <p class="text-lg font-semibold mt-2 text-custom-400">DONASI TERKUMPUL</p>
                </div>

                <!-- count tabel donasi -->
                <div class="flex flex-col items-center text-center px-4">
                    <ion-icon name="card-outline" class="text-custom-200 w-16 h-16 mb-4"></ion-icon>
                    <h2 class="text-4xl font-bold text-custom-500">{{ $totalTransaksi }}</h2>
                    <p class="text-lg font-semibold mt-2 text-custom-400">TRANSAKSI CAMPAIGN</p>
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

            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
            </div>

            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
            </div>

            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
            </div> 

            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
            </div>

            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
            </div>

            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
            </div>

            <div class="group overflow-hidden rounded-lg shadow-lg">
                <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
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
            <a href="/donation" class="text-[1rem] font-bold bg-yellow-400 hover:bg-yellow-500 transition-all px-12 py-4 m-10 text-custom-50 rounded-lg shadow-md">
                Donasi Sekarang
            </a>
        </div>
    
    </div>
    
</main>
@stop
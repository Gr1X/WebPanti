@extends('layout.app')

@section('content')
<main class="">
    <div class="bg-custom-400 pt-24">
        <div class="md:flex justify-between py-36 pb-50 px-10">

            <div class="self-start relative z-10 space-y-6 ms-6 mt-16 py-4 px-8 bg-custom-400 md:bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-100 md:bg-opacity-10 border border-gray-100 shadow-lg">
                <!-- Heading -->
                <div class="mt-4">
                    <h1 class="text-custom-300 leading-2 text-1xl md:text-2xl lg:text-5xl font-extrabold leading-tight">
                        Menggapai Keberkahan dengan Memuliakan Generasi.
                    </h1>
                </div>
            
                <!-- Subheading -->
                <p class="text-gray-700 text-xs text-base leading-relaxed max-w-2xl mx-auto lg:mx-0 font-semibold">
                    Panti Asuhan Nurul Jadid Tangerang hadir sebagai wujud kepedulian 
                    kepada yatim piatu dan dhuafa, dengan semangat untuk membangun 
                    generasi yang mandiri, berakhlak mulia, dan penuh keberkahan. 
                </p>
            </div>
            
            
            <div class="py-12 mx-56 gap-2 flex justify-center">
                <div class="lg:block absolute lg:top-10 translate-x-[-10rem] translate-y-[-2rem] lg:translate-x-[10rem] w-40 h-40 bg-gray-50 p-3 flex flex-col shadow-lg  rotate-[-10deg] drop-shadow-xl">
                    <div class="duration-500 contrast-50 h-24 bg-black hover:contrast-100">
                        <img src="./images/1.jpg" alt="gambar1" class="">
                    </div>
                </div>
                
                <div class="hidden lg:block absolute translate-x-[2rem] translate-y-[-10rem] self-end w-52 h-52 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl z-10 shadow-xl rotate-[-5deg]">
                    <div class="duration-500 contrast-50 h-32 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 

                <div class="hidden md:block absolute translate-x-[12rem] md:translate-x-[9rem] translate-y-[-12rem] self-end w-52 h-52 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl z-10 shadow-xl rotate-[7deg]">
                    <div class="duration-500 contrast-50 h-32 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 
                
                <div class="absolute lg:block translate-x-[-1rem] lg:translate-x-[8rem] translate-y-[-3rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-4xl rotate-[5deg] shadow-xl z-5 lg:z-10">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/5.jpg" alt="gambar2" class="">
                    </div>
                </div>

                <div class="hidden md:block absolute translate-x-[-1rem] translate-y-[3rem] self-end w-64 h-64 bg-gray-50 p-3 flex flex-col gap-1 shadow-xl rotate-[5deg] z-20">
                    <div class="duration-500 contrast-50 h-42 bg-black hover:contrast-100">
                        <img src="./images/2.jpg" alt="gambar5" class="object-fit">
                    </div>
                </div> 
                
                <div class="hidden md:block absolute translate-x-[-8rem] translate-y-[12rem] self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 shadow-xl rotate-[-10deg] shadow-2xl z-20">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/6.jpg" alt="gambar6" class="">
                    </div>
                </div>
                
                <div class="absolute translate-x-[-4rem] lg:translate-x-[7rem] translate-y-[0rem] lg:translate-y-[10rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-xl rotate-[10deg] z-5 lg:z-10">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 

                <div class="hidden md:block absolute translate-x-[4rem] translate-y-[17rem] self-end w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 shadow-xl rotate-[10deg] z-20">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 
                
                <div class="absolute translate-x-[-5rem] translate-y-[-25rem] md:translate-x-[6rem] lg:translate-x-[18rem] md:translate-y-[7rem] lg:translate-y-[18rem] self-center w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-xl md:rotate-[-5deg] rotate-[-15deg] shadow-2xl z-5 lg:z-20">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/6.jpg" alt="gambar6" class="">
                    </div>
                </div>
            </div> 
        </div> 
        
        <div class="bg-custom-50 h-full">
            {{-- Animate background--}}
            <span class="relative w-screen translate-y-[-10rem] outline-none box-shadow-none">
                <dotlottie-player src="https://lottie.host/8e5adb9c-0e01-48d2-8b0c-0db392fd9fb1/bouLG7TzPG.json" background="transparent" speed="1" style="all:unset;" loop autoplay class="w-full h-[300px] outline-none border-2"></dotlottie-player>
            </span>
            
            <div class="px-10 md:px-20 py-28 bg-custom-50 space-y-4">
    
                <span class="pb-8 text-5xl font-bold text-custom-500 z-10">Tentang kami...</span>
                <!-- Timeline -->
                <ol class="relative border-l border-custom-100 border-l-2 mt-8">
                    <!-- Timeline Item 1 -->
                    <li class="mb-10 ml-10">
                        <div class="absolute w-10 h-10 bg-custom-75 rounded-full -left-5 flex items-center justify-center ring-8 ring-custom-400 shadow">
                            <ion-icon name="calendar" class="w-6 h-6 text-custom-500"></ion-icon>
                        </div>
    
                        <div class="h-full w-full rounded-xl border border-dashed p-2 border-4 border-custom-200">
                            <div class="h-full w-full p-6 bg-yellow-500 rounded-lg bg-clip-padding backdrop-filter shadow-2xl">
                                <h3 class="flex items-center mb-2 text-4xl font-bold text-custom-50">
                                    Yayasan Nurul Jadid
                                </h3>
                                <p class="mb-4 text-md text-custom-500 font-semibold">
                                    Panti Asuhan Nurul Jadid adalah sebuah yayasan yang berlokasi di Jl. Irigasi Sipon No.152, Poris Plawad Utara, Kecamatan Cipondoh, Kota Tangerang, Banten. 
                                    Yayasan ini bergerak di bidang sosial, termasuk pengelolaan panti asuhan, majelis taklim, dan kegiatan dakwah. 
                                    Saat ini, Panti Asuhan Nurul Jadid mengasuh 19 santri yang terdiri dari 10 santri putri dan 9 santri putra. Para santri ini berasal dari berbagai daerah seperti Jakarta, Bandung, dan sekitar Tangerang. Selain itu, yayasan ini juga membantu anak-anak dhuafa yang tinggal di sekitar panti. 
                                    Panti Asuhan Nurul Jadid terdaftar sebagai Lembaga Kesejahteraan Sosial resmi di Kota Tangerang.
                                </p>
                            </div>
                        </div>
                    </li>
            
                    <!-- Timeline Item 2 -->
                    <li class="mb-10 ml-10">
                        <div class="absolute w-10 h-10 bg-custom-75 rounded-full -left-5 flex items-center justify-center ring-8 ring-custom-400">
                            <ion-icon name="calendar" class="w-6 h-6 text-custom-500"></ion-icon>
                        </div>
                        <div class="h-full w-full rounded-2xl border border-dashed p-2 border-4 border-custom-200">
                            <div class="h-full w-full p-6 bg-yellow-500 rounded-lg bg-clip-padding backdrop-filter relative z-20 shadow-xl">
                                <h3 class="flex items-center mb-2 text-4xl font-bold text-custom-50 ">
                                    Visi
                                </h3>
                                <p class="mb-4 text-md font-normal text-custom-500 font-semibold">
                                    Menjadi lembaga sosial terpercaya, amanah, dan peduli, serta berkontribusi dalam mewujudkan sumber daya manusia yang kreatif, inovatif, mandiri, dan berkarakter mulia.
                                </p>
                            </div>
                        </div>
                    </li>
    
                    <!-- Timeline Item 3 -->
                    <li class="mb-10 ml-10">
                        <div class="absolute w-10 h-10 bg-custom-75 rounded-full -left-5 flex items-center justify-center ring-8 ring-custom-400">
                            <ion-icon name="calendar" class="w-6 h-6 text-custom-500"></ion-icon>
                        </div>
                        <div class="h-full w-full rounded-2xl border border-dashed p-2 border-4 border-custom-200">
                            <div class="h-full w-full p-6 bg-yellow-500 rounded-xl bg-clip-padding relative z-10 shadow-xl">
                                <h3 class="flex items-center mb-2 text-4xl font-semibold text-custom-50 ">
                                    Misi
                                </h3>
                                <p class="mb-4 text-lg font-semibold text-custom-400">
                                    <span>1. Mendidik generasi muda melalui pendidikan formal maupun non-formal sehingga menjadi generasi yang kreatif, inovatif, dan mandiri.</span><br />
                                    <span>2. Menyelenggarakan kegiatan sosial yang aktif dan berdimensi rahmatan lil a'lamin.</span><br />
                                    <span>3. Mengembangkan potensi usaha masyarakat sekitar sehingga mampu menjadi masyarakat yang sejahtera dan mandiri.</span><br />
                                    <span>4. Mengelola sumber-sumber dana secara jujur dan amanah mendistribusikannya kepada anak yatim.</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ol>
    
                {{--  --}}
                <div class="mt-5">
                    <div class="hidden lg:block absolute translate-x-[75rem] translate-y-[-1rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-xl rotate-[10deg] drop-shadow-2xl">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                            <img src="./images/1.jpg" alt="gambar1" class="">
                        </div>
                    </div> 
    
                    <div class="hidden lg:block absolute translate-x-[67rem] translate-y-[3rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-xl rotate-[-10deg] drop-shadow-2xl z-1">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                            <img src="./images/1.jpg" alt="gambar1" class="">
                        </div>
                    </div>   
                    
                    
                    <div class="hidden lg:block absolute translate-x-[55rem] translate-y-[4rem] self-end w-64 h-64 bg-gray-50 p-3 flex flex-col gap-1 shadow-xl rotate-[5deg]">
                        <div class="duration-500 contrast-50 h-46 bg-black hover:contrast-100">
                            <img src="./images/2.jpg" alt="gambar5" class="object-fit">
                        </div>
                    </div> 
                    
                    <div class="hidden lg:block absolute translate-x-[42rem] translate-y-[2rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-2xl rotate-[-5deg]">
                        <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100 object-fit">
                            <img src="./images/2.jpg" alt="gambar4" class="">
                        </div>
                    </div> 
                    
                    <div class="hidden md:block lg:block absolute md:translate-x-[29rem] translate-x-[32rem] translate-y-[1rem] self-end w-64 h-64 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-2xl rotate-[5deg]">
                        <div class="duration-500 contrast-50 h-46 bg-black hover:contrast-100">
                            <img src="./images/2.jpg" alt="gambar5" class="object-fit">
                        </div>
                    </div> 
                    
                    <div class="hidden md:block lg:block absolute translate-x-[22rem] translate-y-[2rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-2xl rotate-[-8deg] shadow-2xl">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                            <img src="./images/5.jpg" alt="gambar2" class="">
                        </div>
                    </div>
    
                    <div class="absolute translate-x-[6rem] md:translate-x-[10rem] translate-y-[4rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-2xl rotate-[5deg] lg:rotate-[10deg] shadow-2xl">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                            <img src="./images/5.jpg" alt="gambar2" class="">
                        </div>
                    </div>
    
                    <div class="absolute translate-x-[-5rem] translate-y-[2rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-xl shadow-2xl rotate-[-5deg]">
                        <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100 object-fit">
                            <img src="./images/2.jpg" alt="gambar4" class="">
                        </div>
                    </div> 
    
                    <div class="absolute translate-x-[-10rem] translate-y-[8rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-2xl rotate-[10deg] shadow-2xl">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                            <img src="./images/5.jpg" alt="gambar2" class="">
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>        

    <div class="text-white pt-60 bg-custom-75">
        <div class="relative h-50 bg-cover bg-center py-10">
            <div class="flex justify-center h-full">
                <div class="text-white">
                    <h1 class="text-6xl font-bold">Berita Panti</h1>
                </div>
            </div>
        </div>        
    </div>

    <div class="">    
    </div>
        
    <div class="flex justify-between gap-4 pb-10 px-10 py-10">
        <!-- Video Section -->
        <div class="w-3/5 rounded-xl bg-slate-100 overflow-hidden relative">
            <div class="aspect-w-16 aspect-h-7">
                <iframe
                    class="absolute top-0 left-0 w-full h-full"
                    src="https://www.youtube.com/embed/XYpFpex8A-s"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    
        <!-- Card Section -->
        <div class="w-2/5 border-s-2 border-gray-200">
            <div class="grid grid-cols-1 ps-4 space-y-2">
                @foreach($latestNews as $news)
                    <div class="relative flex flex-col md:flex-row bg-white shadow-md hover:shadow-lg transition-shadow rounded-xl overflow-hidden border border-gray-100">
                        <div class="md:w-1/3">
                            <img src="{{ asset('storage/' . $news->gambar) }}" alt="{{ $news->judul }}" class="object-cover h-full w-full">
                        </div>
                        <div class="p-4 flex flex-col justify-between">
                            <h4 class="text-custom-50 text-xl font-bold">{{ $news->judul }}</h4>
                            <p class="text-gray-600 text-sm mt-2">{{ Str::limit($news->deskripsi, 100) }}</p>
                            <a href="#" class="text-custom-75 text-sm font-semibold hover:underline mt-4 flex items-center">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    

    <div class="pt-10">
        <div class="flex justify-center relative">
            <!-- Optional Heading -->
            <div class="absolute font-semibold">
                {{-- <h1 class="text-[10rem] text-center text-slate-500 opacity-10">Gallery</h1> --}}
            </div>
        </div>
        
        <!-- Gallery Grid -->
        <div class="relative lg:bg-fixed bg-center bg-cover" style="background-image: url('images/bg.jpg');">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
        
            <!-- Content -->
            <div class="relative z-10 py-20">
                <!-- Title -->
                <h2 class="text-white text-3xl md:text-5xl font-bold text-center mb-10 ">Gallery</h2>
        
                <!-- Gallery Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 my-10 mx-6 md:mx-20">
                    @foreach($latestGallery as $galleryItem)
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <!-- Gambar dari galeri dengan ukuran 400px x 300px -->
                        <img class="h-72 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" 
                            src="{{ asset('storage/' . $galleryItem->gambar) }}" 
                            alt="Gallery Image {{ $loop->iteration }}">
                    </div>
                    @endforeach
                </div>
        
                <!-- See More Button -->
                <div class="flex justify-center my-4">
                    <a href="/gallery" class="bg-custom-50 text-white font-semibold rounded-full px-10 py-4 transition duration-300 hover:bg-custom-100 hover:shadow-lg">
                        See More
                    </a>
                </div>
            </div>
        </div>
        
    <div class="bg-custom-50 py-10">
        <div class="grid grid-cols-3 items-center text-white px-4 md:px-10 divide-x divide-custom-400">
            <!-- count tabel target -->
            <div class="flex flex-col items-center text-center px-4">
                <ion-icon name="hand-right-outline" class="text-custom-200 w-16 h-16 mb-4"></ion-icon>
                <h2 class="text-2xl md:text-4xl font-bold text-custom-500">{{ $totalTarget }}</h2>
                <p class="text-md md:text-lg font-semibold mt-2 text-custom-400">CAMPAIGN</p>
            </div>

                <!-- sum kolom jumlah pada tabel donasi -->
            <div class="flex flex-col items-center text-center px-4">
                <ion-icon name="cash-outline" class="text-custom-200 w-16 h-16 mb-4"></ion-icon>
                <h2 class="text-2xl md:text-4xl font-bold text-custom-500">Rp. {{ number_format($totalDonasiTerkumpul, 0, ',', '.') }}</h2>
                <p class="text-md md:text-lg font-semibold mt-2 text-custom-400">DONASI TERKUMPUL</p>
            </div>

                <!-- count tabel donasi -->
            <div class="flex flex-col items-center text-center px-4">
                <ion-icon name="card-outline" class="text-custom-200 w-16 h-16 mb-4"></ion-icon>
                <h2 class="text-2xl md:text-4xl font-bold text-custom-500">{{ $totalTransaksi }}</h2>
                <p class="text-md md:text-lg font-semibold mt-2 text-custom-400">TRANSAKSI CAMPAIGN</p>
            </div>
        </div>
    </div>      

    <div class="pt-10 space-y-6">
        <span class="text-5xl font-bold mx-10">Donasi</span>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 px-10">
            @foreach ($latestPrograms as $program)
                <a href="{{ route('donateDetails', $program->id) }}" class="bg-custom-500 rounded-xl shadow-lg overflow-hidden max-w-md border border-gray-100">
                    <!-- Gambar Program -->
                    <img class="w-full h-52 object-cover" 
                        src="{{ $program->gambar ? asset('storage/' . $program->gambar) : 'https://via.placeholder.com/300' }}" 
                        alt="{{ $program->namaprogram }}">
        
                    <!-- Informasi Program -->
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-1">{{ $program->namaprogram }}</h2>
                        <p class="text-sm text-gray-700 mb-2">{{ Str::limit($program->deskripsi, 100) }}</p>
                        <hr class="my-4" />
        
                        <!-- Progress Bar -->
                        @php
                            $terkumpul = $program->donasi_sum_jumlah ?? 0;
                            $persentase = $program->jumlah_target > 0 ? round(($terkumpul / $program->jumlah_target) * 100, 2) : 0;
                        @endphp
                        <div class="w-full bg-gray-200 rounded-full dark:bg-custom-375 my-1">
                            <div class="bg-custom-300 text-xs font-semibold text-center p-0.5 leading-none rounded-full shadow shadow-custom-400/70" style="width: {{ $persentase }}%">
                                {{ $persentase }}%
                            </div>
                        </div>
        
                        <!-- Info Terkumpul dan Tanggal Selesai -->
                        <div class="flex flex-wrap justify-between mt-1">
                            <div class="grid">
                                <span class="text-sm">Terkumpul</span>
                                <span class="text-lg font-bold">Rp. {{ number_format($terkumpul, 0, ',', '.') }}</span>
                            </div>
                            <div class="grid items-end">
                                @php
                                    $tglSelesai = $program->tgl_selesai ? \Carbon\Carbon::parse($program->tgl_selesai)->format('d M Y') : 'Tidak Ditentukan';
                                @endphp
                                <span class="text-sm">Tanggal Selesai</span>
                                <span class="text-center text-lg font-bold">{{ $tglSelesai }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
    </div>


    <div class="flex justify-between items-center relative h-56 overflow-hidden rounded-xl md:h-64 my-10 mx-10 lg:mx-32 bg-gradient-to-r from-custom-100 via-custom-100 to-custom-50 shadow-2xl border border-custom-100">
        <!-- Left Content -->   
        <div class="ml-4 md:ml-12">
            <h1 class="text-2xl md:text-4xl font-bold text-custom-50">Mari Berdonasi</h1>
            <p class="text-custom-50 text-md md:text-lg mt-2 font-light">Bantu mereka mendapatkan kehidupan yang lebih baik.</p>
        </div>
    
        <!-- Right Button -->
        <div class="flex h-full items-end">
            <a href="/donation" class="text-sm md:text-[1rem] font-bold bg-custom-200 hover:bg-yellow-600 transition-all px-6 md:px-12 py-4 m-10 text-custom-500 rounded-lg shadow-md">
                Donasi Sekarang
            </a>
        </div>
    </div>
    
</main>

<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

<script>
    function toggleAccordion(contentId, chevronId) {
    const content = document.getElementById(contentId);
    const chevron = document.getElementById(chevronId);

    if (content.style.maxHeight) {
        // Jika accordion sedang terbuka, tutup
        content.style.maxHeight = null;
        chevron.classList.remove('rotate-180');
    } else {
        // Jika accordion tertutup, buka
        content.style.maxHeight = content.scrollHeight + 'px';
        chevron.classList.add('rotate-180');
    }
}

// document.addEventListener('scroll', function () {
//             const parallax = document.querySelector('.bg-fixed');
//             const scrollPosition = window.pageYOffset;
//             parallax.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
//         });

</script>
@stop
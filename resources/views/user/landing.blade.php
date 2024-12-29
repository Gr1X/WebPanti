@extends('layout.app')

@section('content')
<main class="">
    <div class="bg-custom-400 pt-24">
        
        <div class="flex justify-between py-32 px-10">

            <div class="relative z-10 space-y-6 self-center text-center lg:text-left">
                <!-- Heading -->
                <div class="pt-12">
                    <h1 class="text-custom-50 text-2xl md:text-3xl lg:text-5xl font-bold leading-tight">
                        Menggapai Keberkahan dengan Memuliakan Generasi.
                    </h1>
                </div>
            
                <!-- Subheading -->
                <p class="text-gray-700 text-sm md:text-base leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Yayasan Nurul Jadid Tangerang hadir sebagai wujud kepedulian kepada yatim piatu dan dhuafa, dengan semangat untuk membangun generasi yang mandiri, berakhlak mulia, dan penuh keberkahan. Melalui berbagai program pendidikan, santunan, dan kegiatan sosial, kami berkomitmen untuk memberikan harapan baru dan menciptakan perubahan positif bagi masyarakat yang membutuhkan. Bergabunglah bersama kami untuk mewujudkan masa depan yang lebih cerah dan penuh kasih sayang.
                </p>
            
                <!-- Button -->
                <div class="mt-6">
                    <div class="relative group">
                        <button class="relative inline-block p-px font-semibold leading-6 text-white bg-neutral-900 shadow-lg cursor-pointer rounded-full shadow-emerald-900 transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95">
                            <span class="absolute inset-0 rounded-full bg-gradient-to-r from-emerald-500 via-cyan-500 to-sky-600 p-[2px] opacity-0 transition-opacity duration-500 group-hover:opacity-100"></span>
                            <span class="relative z-10 block px-8 py-4 rounded-full bg-neutral-950">
                                <div class="relative z-10 flex items-center space-x-3">
                                    <span class="transition-all duration-500 group-hover:translate-x-1.5 group-hover:text-emerald-300">
                                        Begin Journey
                                    </span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="w-6 h-6 transition-transform duration-500 group-hover:translate-x-1.5 group-hover:text-emerald-300"
                                    >
                                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                                    </svg>
                                </div>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            

            <div class="py-10 mx-56 gap-2 flex justify-center ">
                <div class="absolute top-10 translate-x-[10rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-4xl rotate-[-10deg] drop-shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/1.jpg" alt="gambar1" class="">
                    </div>
                </div>
                
                <div class="absolute translate-x-[1rem] translate-y-[-12rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl z-10 shadow-2xl rotate-[-5deg]">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 

                <div class="absolute translate-x-[-10rem] translate-y-[-3rem] w-56 h-56 bg-gray-50 p-3 flex flex-col z-20 shadow-4xl rotate-[4deg] shadow-2xl z-10">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/5.jpg" alt="gambar2" class="">
                    </div>
                </div>

                <div class="absolute translate-x-[-15rem] translate-y-[3rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-2xl rotate-[2deg]">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100">
                        <img src="./images/2.jpg" alt="gambar5" class="object-fit">
                    </div>
                </div> 

                <div class="absolute translate-x-[-5rem] translate-y-[12rem] self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-4xl rotate-[-10deg] shadow-2xl z-10">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/6.jpg" alt="gambar6" class="">
                    </div>
                </div>
                
                <div class="absolute translate-x-[7rem] translate-y-[18rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl z-10 shadow-2xl rotate-[10deg]">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 

                <div class="absolute translate-x-[18rem] translate-y-[25rem] self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-4xl rotate-[-10deg] shadow-2xl z-10">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/6.jpg" alt="gambar6" class="">
                    </div>
                </div>
            </div> 
        </div> 


        <div class="px-20 py-20 bg-custom-350">
            <!-- Timeline -->
            <ol class="relative border-l border-custom-100">
                <!-- Timeline Item 1 -->
                <li class="mb-10 ml-8">
                    <div class="absolute w-6 h-6 bg-custom-75 rounded-full -left-3 flex items-center justify-center ring-8 ring-custom-400">
                        <svg class="w-3 h-3 text-custom-50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <div class="h-full w-full p-4 bg-custom-50 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 shadow-xl">
                        <h3 class="flex items-center mb-2 text-3xl font-semibold text-custom-50 ">
                            Yayasan Nurul Jadid
                        </h3>
                        <p class="mb-4 text-base font-normal text-custom-75">
                            Panti Asuhan Nurul Jadid adalah sebuah yayasan yang berlokasi di Jl. Irigasi Sipon No.152, Poris Plawad Utara, Kecamatan Cipondoh, Kota Tangerang, Banten. 
                            Yayasan ini bergerak di bidang sosial, termasuk pengelolaan panti asuhan, majelis taklim, dan kegiatan dakwah. 
                            Saat ini, Panti Asuhan Nurul Jadid mengasuh 19 santri yang terdiri dari 10 santri putri dan 9 santri putra. Para santri ini berasal dari berbagai daerah seperti Jakarta, Bandung, dan sekitar Tangerang. Selain itu, yayasan ini juga membantu anak-anak dhuafa yang tinggal di sekitar panti. 
                            Panti Asuhan Nurul Jadid terdaftar sebagai Lembaga Kesejahteraan Sosial resmi di Kota Tangerang.
                        </p>
                    </div>
                </li>
        
                <!-- Timeline Item 2 -->
                <li class="mb-10 ml-8">
                    <div class="absolute w-6 h-6 bg-custom-75 rounded-full -left-3 flex items-center justify-center ring-8 ring-custom-400">
                        <svg class="w-3 h-3 text-custom-50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <div class="h-full w-full p-4 bg-custom-50 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-20 relative z-20 shadow-xl">
                        <h3 class="mb-2 text-3xl font-semibold text-custom-50">Visi</h3>
                        <p class="text-base font-normal text-custom-500">
                            Menjadi lembaga sosial terpercaya, amanah, dan peduli, serta berkontribusi dalam mewujudkan sumber daya manusia yang kreatif, inovatif, mandiri, dan berkarakter mulia.
                        </p>
                    </div>
                </li>

                <li class="mb-10 ml-8">
                    <div class="absolute w-6 h-6 bg-custom-75 rounded-full -left-3 flex items-center justify-center ring-8 ring-custom-400">
                        <svg class="w-3 h-3 text-custom-50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <div class="h-full w-full p-4 bg-custom-50 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-20 relative z-10 shadow-xl">
                        <h3 class="mb-2 text-3xl font-semibold text-custom-50">Misi</h3>
                        <p class="text-base font-normal text-custom-500 gap-4">
                            <span>1. Mendidik generasi muda melalui pendidikan formal maupun non-formal sehingga menjadi generasi yang kreatif, inovatif, dan mandiri.</span><br />
                            <span>2. Menyelenggarakan kegiatan sosial yang aktif dan berdimensi rahmatan lil a'lamin.</span><br />
                            <span>3. Mengembangkan potensi usaha masyarakat sekitar sehingga mampu menjadi masyarakat yang sejahtera dan mandiri.</span><br />
                            <span>4. Mengelola sumber-sumber dana secara jujur dan amanah mendistribusikannya kepada anak yatim.</span>
                        </p>
                    </div>
                </li>
            </ol>
            <div class="mt-5">
                <div class="absolute translate-x-[75rem] translate-y-[-1rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-4xl rotate-[10deg] drop-shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/1.jpg" alt="gambar1" class="">
                    </div>
                </div> 

                <div class="absolute translate-x-[67rem] translate-y-[3rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-4xl rotate-[-10deg] drop-shadow-2xl z-1">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/1.jpg" alt="gambar1" class="">
                    </div>
                </div>   
                
                
                <div class="absolute translate-x-[55rem] translate-y-[4rem] self-end w-64 h-64 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-2xl rotate-[5deg]">
                    <div class="duration-500 contrast-50 h-46 bg-black hover:contrast-100">
                        <img src="./images/2.jpg" alt="gambar5" class="object-fit">
                    </div>
                </div> 
                
                <div class="absolute translate-x-[42rem] translate-y-[2rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-2xl rotate-[-5deg]">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 
                
                <div class="absolute translate-x-[32rem] translate-y-[1rem] self-end w-64 h-64 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-2xl rotate-[5deg]">
                    <div class="duration-500 contrast-50 h-46 bg-black hover:contrast-100">
                        <img src="./images/2.jpg" alt="gambar5" class="object-fit">
                    </div>
                </div> 
                
                <div class="absolute translate-x-[22rem] translate-y-[2rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-4xl rotate-[-8deg] shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/5.jpg" alt="gambar2" class="">
                    </div>
                </div>

                <div class="absolute translate-x-[10rem] translate-y-[4rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-4xl rotate-[10deg] shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/5.jpg" alt="gambar2" class="">
                    </div>
                </div>

                <div class="absolute translate-x-[-5rem] translate-y-[2rem] self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl shadow-2xl rotate-[-5deg]">
                    <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100 object-fit">
                        <img src="./images/2.jpg" alt="gambar4" class="">
                    </div>
                </div> 

                <div class="absolute translate-x-[-10rem] translate-y-[8rem] w-56 h-56 bg-gray-50 p-3 flex flex-col shadow-4xl rotate-[10deg] shadow-2xl">
                    <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100">
                        <img src="./images/5.jpg" alt="gambar2" class="">
                    </div>
                </div>
            </div>
        </div>        
    </div>        

    <div class="text-white pt-60 bg-custom-50">
        <div class="relative h-50 bg-cover bg-center py-10">
            <div class="flex justify-center h-full">
                <div class="text-white">
                    <h1 class="text-6xl font-bold">Berita Panti</h1>
                </div>
            </div>
        </div>        
    </div>

    <div class="">
        <div id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-xl md:h-80 my-8 mt-10 mx-10">
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

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-2.5 h-2.5 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
        
            <!-- Slider controls -->
            {{-- <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700/30 group-hover:bg-gray-700/50">
                    <svg class="w-5 h-5 text-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
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
            </button> --}}
        </div>        
    </div>
        
    <div class="flex justify-between gap-4 pb-10 px-10">
        <!-- Video Section -->
        <div class="w-3/5 rounded-xl bg-slate-100 overflow-hidden relative">
            <div class="aspect-w-16 aspect-h-9">
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
            <div class="ps-4 space-y-4">
                <!-- Card -->
                <div class="relative flex flex-col md:flex-row bg-white shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden border border-gray-200">
                    <div class="md:w-1/3">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Card Image" class="object-cover h-full w-full">
                    </div>
                    <div class="p-6 flex flex-col justify-between">
                        <h4 class="text-slate-800 text-xl font-bold">Kegiatan Sosial Desa Binaan</h4>
                        <p class="text-gray-600 text-sm mt-2">Meningkatkan kesejahteraan masyarakat desa melalui pelatihan keterampilan.</p>
                        <a href="#" class="text-green-600 text-sm font-semibold hover:underline mt-4 flex items-center">
                            Baca Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <!-- Repeat Cards -->
                <div class="relative flex flex-col md:flex-row bg-white shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden border border-gray-200">
                    <div class="md:w-1/3">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Card Image" class="object-cover h-full w-full">
                    </div>
                    <div class="p-6 flex flex-col justify-between">
                        <h4 class="text-slate-800 text-xl font-bold">Kegiatan Sosial Desa Binaan</h4>
                        <p class="text-gray-600 text-sm mt-2">Meningkatkan kesejahteraan masyarakat desa melalui pelatihan keterampilan.</p>
                        <a href="#" class="text-green-600 text-sm font-semibold hover:underline mt-4 flex items-center">
                            Baca Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row bg-white shadow-md hover:shadow-lg transition-shadow rounded-lg overflow-hidden border border-gray-200">
                    <div class="md:w-1/3">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Card Image" class="object-cover h-full w-full">
                    </div>
                    <div class="p-6 flex flex-col justify-between">
                        <h4 class="text-slate-800 text-xl font-bold">Kegiatan Sosial Desa Binaan</h4>
                        <p class="text-gray-600 text-sm mt-2">Meningkatkan kesejahteraan masyarakat desa melalui pelatihan keterampilan.</p>
                        <a href="#" class="text-green-600 text-sm font-semibold hover:underline mt-4 flex items-center">
                            Baca Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
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
        <div class="relative bg-fixed bg-center bg-cover" style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg');">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-black opacity-40"></div>
        
            <!-- Content -->
            <div class="relative z-10 py-20">
                <!-- Title -->
                <h2 class="text-white text-3xl md:text-5xl font-bold text-center mb-10">Gallery</h2>
        
                <!-- Gallery Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 my-10 mx-6 md:mx-20">
                    <!-- Image 1 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 1">
                    </div>
        
                    <!-- Image 2 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 2">
                    </div>
        
                    <!-- Image 3 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 3">
                    </div>
        
                    <!-- Image 4 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 4">
                    </div>
        
                    <!-- Image 5 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 5">
                    </div>
        
                    <!-- Image 6 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 6">
                    </div>
        
                    <!-- Image 7 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 7">
                    </div>
        
                    <!-- Image 8 -->
                    <div class="group overflow-hidden rounded-lg shadow-lg">
                        <img class="h-auto max-w-full transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Gallery Image 8">
                    </div>
                    
                </div>
        
                <!-- See More Button -->
                <div class="flex justify-center my-4">
                    <a href="/gallery" class="bg-slate-700 text-white font-semibold rounded-full px-10 py-4 transition duration-300 hover:bg-slate-600 hover:shadow-lg">
                        See More
                    </a>
                </div>
            </div>
        </div>
        
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

document.addEventListener('scroll', function () {
            const parallax = document.querySelector('.bg-fixed');
            const scrollPosition = window.pageYOffset;
            parallax.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });

</script>
@stop
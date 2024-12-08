@extends('layout.app')

@section('content')
<div class="pt-56 pb-20 w-full bg-custom-400">
    <div class="flex flex-col md:flex-row justify-between px-8 items-center">
        <!-- Bagian Kiri -->
        <div class="md:w-1/2">
            <!-- Carousel Container -->
            <div id="carousel" class="relative h-[25rem] w-full bg-gray-200 rounded-lg overflow-hidden shadow-lg">
                <!-- Images -->
                <div class="absolute inset-0 opacity-100 transition-opacity duration-700 ease-in-out" id="image-1">
                    <img src="https://via.placeholder.com/600x400" alt="Detail Image 1" class="h-full w-full object-cover">
                </div>
                <div class="absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out" id="image-2">
                    <img src="https://via.placeholder.com/600x400/ff7f7f" alt="Detail Image 2" class="h-full w-full object-cover">
                </div>
                <div class="absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out" id="image-3">
                    <img src="https://via.placeholder.com/600x400/7fff7f" alt="Detail Image 3" class="h-full w-full object-cover">
                </div>

                <!-- Navigation -->
                <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white/50 p-2 rounded-full" id="prevBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-700">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white/50 p-2 rounded-full" id="nextBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-700">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="md:w-1/2 md:pl-12 mt-8 md:mt-0">
            <!-- Judul dan Deskripsi -->
            <div>
                <h2 class="text-3xl font-bold text-custom-50 mb-4">Kebakaran</h2>
                <hr class="border-t-2 border-custom-100 mb-6" />
                <p class="text-md text-gray-800 leading-relaxed max-h-[20rem] overflow-y-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Etiam at turpis augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                    per inceptos himenaeos. Suspendisse auctor, tellus volutpat euismod tempor, ex nisl egestas ante, 
                    at pulvinar elit velit at nulla. Nullam ut interdum ex. Sed felis velit, molestie vel rutrum ut, 
                    sagittis pharetra lorem. Pellentesque feugiat dictum egestas. Praesent eu molestie ligula. Etiam cursus, 
                    nunc a gravida sagittis, leo lorem facilisis arcu, auctor pulvinar ex velit vitae lectus. Donec tempor 
                    fermentum posuere.

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Etiam at turpis augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                    per inceptos himenaeos. Suspendisse auctor, tellus volutpat euismod tempor, ex nisl egestas ante, 
                    at pulvinar elit velit at nulla. Nullam ut interdum ex. Sed felis velit, molestie vel rutrum ut, 
                    sagittis pharetra lorem. Pellentesque feugiat dictum egestas. Praesent eu molestie ligula. Etiam cursus, 
                    nunc a gravida sagittis, leo lorem facilisis arcu, auctor pulvinar ex velit vitae lectus. Donec tempor 
                    fermentum posuere.

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Etiam at turpis augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                    per inceptos himenaeos. Suspendisse auctor, tellus volutpat euismod tempor, ex nisl egestas ante, 
                    at pulvinar elit velit at nulla. Nullam ut interdum ex. Sed felis velit, molestie vel rutrum ut, 
                    sagittis pharetra lorem. Pellentesque feugiat dictum egestas. Praesent eu molestie ligula. Etiam cursus, 
                    nunc a gravida sagittis, leo lorem facilisis arcu, auctor pulvinar ex velit vitae lectus. Donec tempor 
                    fermentum posuere.
                </p>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {
    const images = ["image-1", "image-2", "image-3"];
    let currentIndex = 0;

    const showImage = (index) => {
        images.forEach((id, i) => {
            const image = document.getElementById(id);
            if (i === index) {
                image.classList.remove("opacity-0");
                image.classList.add("opacity-100");
            } else {
                image.classList.remove("opacity-100");
                image.classList.add("opacity-0");
            }
        });
    };

    document.getElementById("prevBtn").addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    });

    document.getElementById("nextBtn").addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    });

    // Tampilkan gambar pertama
    showImage(currentIndex);
});

</script>

@stop

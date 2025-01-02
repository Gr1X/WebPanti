@extends('layout.app')

@section('content')
    <div class="mt-28 gap-4">
        <img src="./images/banner1.png" alt="banner1" class="w-full h-full object-cover">
    </div>
    <div class="bg-custom-400 min-h-screen px-14 gap-4">
        <div class="pt-16 w-full lg:pt-16 mb-8">
            <div class="bg-custom-400 dark:bg-custom-400 border border-custom-50 dark:border-custom-50 rounded-lg p-8 md:pt-16 md:p-12">
                <h1 class="text-custom-50 dark:text-custom-50 text-4xl md:text-5xl font-semibold mb-2">Tentang Kami</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">"Menggapai Keberkahan dengan Memuliakan Generasi"</p>
                <hr class="border-custom-50">
                <p class="mt-9">
                    Yayasan Nurul Jadid adalah sebuah lembaga sosial yang berdedikasi untuk memberikan kontribusi nyata dalam meningkatkan kualitas hidup masyarakat, khususnya anak-anak yatim dan keluarga kurang mampu. 
                    Berdiri dengan semangat kepercayaan, kejujuran, dan kepedulian, kami berkomitmen untuk menciptakan lingkungan yang mendukung pengembangan sumber daya manusia yang kreatif, inovatif, mandiri, dan berkarakter mulia.
                </p>
                <br>
                <p>
                    Berlokasi di Jl. Irigasi Sipon No.152, RT.002/RW.002, Poris Plawad Utara, Kec. Cipondoh, Kota Tangerang, Banten, Yayasan Nurul Jadid menjadi pusat kegiatan sosial yang memberikan dampak positif bagi masyarakat sekitar.
                </p>
            </div>
            
            <!-- Deskripsi Visi dan Misi -->
            <div class="bg-custom-400 dark:bg-custom-400 border border-custom-50 dark:border-custom-50 rounded-lg p-8 md:pt-16 md:p-12 mt-10 mb-16"> 
                <h3 class="text-custom-50 dark:text-custom-50 text-3xl md:text-3xl font-semibold mb-2">Visi dan Misi</h3>
                <hr class="border-custom-50">
                <p class="text-custom-50 dark:text-custom-50 text-2xl md:text-2xl font-semibold mb-2 mt-6">Visi</p>
                <p>Menjadi lembaga sosial terpercaya, amanah, dan peduli, dan berkontribusi dalam mewujudkan sumber daya manusia yang kreatif
                    inovatif, mandiri, dan berkarakter mulia. 
                </p>
                <p class="text-custom-50 dark:text-custom-50 text-2xl md:text-2xl font-semibold mb-2 mt-6">Misi</p>
                <ul>
                    <li><p>1. Mendidik generasi muda melalui pendidikan formal maupun non formal sehingga menjadi generasi yang kreatif, inovatif, dan mandiri</p></li>
                    <li><p>2. Menyelenggarakan kegiatan sosial yang aktif dan berdimensi rahmatan lil a'lamim</p></li>
                    <li><p>3. Mengembangkan potensi usaha masyarakat sekitar sehingga mampu menjadi masyarakat yang sejahtera dan mandm</p></li>
                    <li><p>4. Mengelola sumber-sumber dana secara jujur dan amanah dan mendistribusikannya kepada anak-anak yatim serta keluarga yang kurang mampu</p></li>
                </ul>
            </div>

            <!-- list kegiatan dan Program -->
            <div class="bg-custom-400 dark:bg-custom-400 border border-custom-50 dark:border-custom-50 rounded-lg p-8 md:pt-16 md:p-12 mt-10 mb-16"> 
                <h3 class="text-custom-50 dark:text-custom-50 text-3xl md:text-3xl font-semibold mb-2">Kegiatan Dan Program</h3>
                <hr class="border-custom-50">
                <br />  
                <ul>
                    <li><p>1. Satunan Pekanan</p></li>
                    <li><p>2. Les Bahasa Inggris</p></li>
                    <li><p>3. Lescalistung</p></li>
                    <li><p>4. Doa Bersama</p></li>
                    <li><p>5. Pemberdayaan Ekonomi Wali Yatim</P></li>
                    <li><p>6. Program Peningkatan Gizi</P></li>
                    <li><p>7. Program Bantuan Kesehatan</P></li>
                </ul>
            </div>

            <div class="px-12">

            </div>
        </div>
    </div>
@stop
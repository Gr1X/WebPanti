@extends('layout.app')

@section('content')
<div class="pt-44 pb-20">
    <!-- Container -->
    <div class="bg-custom-50 text-custom-400 rounded-lg shadow-xl max-w-4xl mx-auto p-10">
        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold mb-4">Pendaftaran Volunteer</h2>
            <p class="text-lg text-custom-200">Bergabunglah dengan kami untuk membantu masyarakat dan menciptakan perubahan nyata.</p>
        </div>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-6">
            <!-- Input Nama -->
            <div>
                <label for="name" class="block text-sm font-semibold mb-2 text-custom-400">Nama Lengkap</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Masukkan nama lengkap Anda" 
                    class="w-full bg-custom-100 text-custom-400 border border-custom-200 rounded-lg p-4 focus:ring-2 focus:ring-custom-200 focus:outline-none"
                />
            </div>

            <!-- Input Tempat Tinggal -->
            <div>
                <label for="address" class="block text-sm font-semibold mb-2 text-custom-400">Tempat Tinggal</label>
                <input 
                    type="text" 
                    id="address" 
                    name="address" 
                    placeholder="Alamat tempat tinggal Anda" 
                    class="w-full bg-custom-100 text-custom-400 border border-custom-200 rounded-lg p-4 focus:ring-2 focus:ring-custom-200 focus:outline-none"
                />
            </div>

            <!-- Input Nomor Telepon -->
            <div>
                <label for="phone" class="block text-sm font-semibold mb-2 text-custom-400">Nomor Telepon</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    placeholder="Masukkan nomor telepon Anda" 
                    class="w-full bg-custom-100 text-custom-400 border border-custom-200 rounded-lg p-4 focus:ring-2 focus:ring-custom-200 focus:outline-none"
                />
            </div>

            <!-- Input Email -->
            <div>
                <label for="email" class="block text-sm font-semibold mb-2 text-custom-400">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Masukkan email Anda" 
                    class="w-full bg-custom-100 text-custom-400 border border-custom-200 rounded-lg p-4 focus:ring-2 focus:ring-custom-200 focus:outline-none"
                />
            </div>

            <!-- Input Jenis Kelamin -->
            <div>
                <label for="gender" class="block text-sm font-semibold mb-2 text-custom-400">Jenis Kelamin</label>
                <select 
                    id="gender" 
                    name="gender" 
                    class="w-full bg-custom-100 text-custom-400 border border-custom-200 rounded-lg p-4 focus:ring-2 focus:ring-custom-200 focus:outline-none"
                >
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <!-- Input Bidang Keahlian -->
            <div>
                <label for="expertise" class="block text-sm font-semibold mb-2 text-custom-400">Bidang Keahlian</label>
                <input 
                    type="text" 
                    id="expertise" 
                    name="expertise" 
                    placeholder="Contoh: Kesehatan, Pendidikan, Sosial" 
                    class="w-full bg-custom-100 text-custom-400 border border-custom-200 rounded-lg p-4 focus:ring-2 focus:ring-custom-200 focus:outline-none"
                />
            </div>

            <!-- Input Motivasi -->
            <div>
                <label for="motivation" class="block text-sm font-semibold mb-2 text-custom-400">Motivasi</label>
                <textarea 
                    id="motivation" 
                    name="motivation" 
                    placeholder="Ceritakan motivasi Anda untuk bergabung..." 
                    rows="5"
                    class="w-full bg-custom-100 text-custom-400 border border-custom-200 rounded-lg p-4 focus:ring-2 focus:ring-custom-200 focus:outline-none"
                ></textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="text-center">
                <button 
                    type="submit" 
                    class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition transform hover:scale-105"
                >
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</div>
@stop

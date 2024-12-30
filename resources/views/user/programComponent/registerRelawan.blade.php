@extends('layout.app')

@section('content')
<div class="pt-44 m-10">
    <!-- Header -->
    <div class="mb-4">
        <div class="mb-8">
            <label class="flex items-center text-gray-600"><a href="" class="">Program</a><ion-icon name="chevron-forward-outline" class="size-4 "></ion-icon><a href="" class="">Volunteer</a></label>
            <h2 class="text-4xl font-bold">Pendaftaran Volunteer</h2>
        </div>
    </div>

    <div class="bg-custom-75 rounded-2xl shadow-xl mx-auto p-10">
        <!-- Form -->
        <form action="{{ route('program.volunteer.register', $bidang) }}" method="POST" class="space-y-4">
            @csrf
            <!-- Form fields -->

            <div class="grid grid-cols-2 gap-2">
                <!-- Nama -->
                <div>
                    <label for="name" class="block text-sm font-semibold mb-2 text-white">Nama Lengkap</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        placeholder="Masukkan nama lengkap Anda" 
                        class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300  focus:outline-custom-300 focus:border-0"
                        required
                    />
                </div>

                <div class="bg-custom-375 flex items-center justify-between ps-0 px-4 mx-2 pr-0 rounded-xl gap-4 border-0">
                    <div class="flex items-center h-full gap-4">
                        <div class="">
                            <div class="bg-custom-200 rounded-r-full w-6 h-12 border-0 shadow"></div>
                        </div>
                        
                        <div class="grid">
                            <span class="text-xs font-semibold text-gray-600">Berperan sebagai tenaga:</span>
                            <span class="text-4xl font-bold uppercase">{{$bidang}}</span>
                        </div>
                    </div>

                    <div class="flex items-center m-2">
                        @if($bidang == 'pendidikan')
                            <ion-icon name="ribbon-outline" class="size-12 bg-custom-200 p-2 text-custom-500 rounded-xl shadow"></ion-icon>
                        @elseif($bidang == 'kesehatan')
                            <ion-icon name="medical-outline" class="size-12 bg-custom-200 p-2 text-custom-500 rounded-xl shadow"></ion-icon>
                        @elseif($bidang == 'sosial')
                            <ion-icon name="rose-outline" class="size-12 bg-custom-200 p-2 text-custom-500 rounded-xl shadow"></ion-icon>
                        @endif
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 w-full gap-4">
                <!-- Alamat -->
                <div>
                    <label for="address" class="block text-sm font-semibold mb-2 text-white">Tempat Tinggal</label>
                    <input 
                        type="text" 
                        id="address" 
                        name="address" 
                        placeholder="Alamat tempat tinggal Anda" 
                        class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300 focus:outline-custom-300 focus:border-0"
                        required
                    />
                </div>

                <!-- Nomor Telepon -->
                <div>
                    <label for="phone" class="block text-sm font-semibold mb-2 text-white">Nomor Telepon</label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone" 
                        placeholder="Masukkan nomor telepon Anda" 
                        class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300  focus:outline-custom-300 focus:border-0"
                        required
                    />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold mb-2 text-custom-400">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Masukkan email Anda" 
                        class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300  focus:outline-custom-300 focus:border-0"
                        required
                    />
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label for="gender" class="block text-sm font-semibold mb-2 text-custom-400">Jenis Kelamin</label>
                    <select 
                        id="gender" 
                        name="gender" 
                        class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300  focus:outline-custom-300 focus:border-0"
                        required
                    >
                        <option value="" disabled selected>Jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <!-- Motivasi -->
            <div>
                <label for="motivation" class="block text-sm font-semibold mb-2 text-custom-400">Motivasi</label>
                <textarea 
                    id="motivation" 
                    name="motivation" 
                    placeholder="Ceritakan motivasi Anda untuk bergabung..." 
                    rows="5"
                    class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-0 focus:outline-none border-0"
                    required
                ></textarea>
            </div>
            <!-- Tombol Submit -->
            <div class="text-end">
                <button 
                    type="submit" 
                    class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-3 px-14 rounded-lg shadow-lg transition transform hover:scale-105"
                >
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

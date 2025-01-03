@extends('layout.detailApp')

@section('content')
<div class="pt-22 m-10">
    <div class="mb-10">
        <div class="flex justify-start items-center mb-4">
            <a href="{{ route('profile') }}" onclick="window.history.back();" class="text-lg font-semibold flex items-center rounded-xl text-gray-700">
                <ion-icon name="chevron-back-outline" class="mr-1 text-xl"></ion-icon>
                Back to previous
            </a>            
        </div>
    </div>

    <div class="mb-4">
        <div class="mb-4">
            <label class="flex items-center text-gray-600">
                <a href="{{ route('profile') }}" class="">Profile</a>
                <ion-icon name="chevron-forward-outline" class="size-4 "></ion-icon>
                <a href="">Edit Profile</a>
            </label>
            <h2 class="text-4xl font-bold">Edit Profile</h2>
        </div>
    </div>

    <div class="border border-4 border-custom-200 border-dashed p-2 rounded-xl">
        <div class="bg-custom-50 rounded-2xl shadow-xl mx-auto p-10">
            <!-- Form -->
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:flex md:gap-8">
                    <!-- Dropzone for Profile Picture -->
                    <div class="flex justify-center items-center mb-4 md:mb-0">
                        <div id="dropzone" class="relative flex justify-center items-center w-44 h-44 rounded-full border-4 border-dashed cursor-pointer" onclick="triggerFileInput()">
                            <div id="upload-prompt" class="text-center {{ $user->gambar ? 'hidden' : '' }}">
                                <ion-icon name="cloud-upload-outline" class="text-custom-400 text-4xl"></ion-icon>
                                <p class="text-sm text-custom-200">Upload a file</p>
                            </div>
                            <div id="preview" class="absolute inset-0 rounded-full overflow-hidden {{ $user->gambar ? '' : 'hidden' }}" onclick="triggerFileInput()">
                                @if ($user->gambar)
                                    <img src="{{ asset('storage/' . $user->gambar) }}" alt="Preview" class="w-full h-full object-cover">
                                @endif
                            </div>
                            <input id="gambar" name="gambar" type="file" class="hidden" accept="image/jpeg, image/jpg, image/gif" onchange="handleFileUpload(event)" />
                        </div>
                    </div>
    
                    <!-- Form Fields -->
                    <div class="grid grid-cols-1 gap-4 w-full">
                        <!-- Nama Lengkap -->
                        <div class="w-full">
                            <label for="name" class="block text-sm font-semibold mb-2 text-white">Nama Lengkap</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ old('name', $user->name) }}"
                                class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300 focus:outline-none focus:border-0"
                                required
                            />
                        </div>
        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold mb-2 text-white">Email</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    value="{{ old('email', $user->email) }}"
                                    class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300 focus:outline-none focus:border-0"
                                    required
                                />
                            </div>
                            <!-- Nomor Telepon -->
                            <div>
                                <label for="no_telp" class="block text-sm font-semibold mb-2 text-white">Nomor Telepon</label>
                                <input 
                                    type="text" 
                                    id="no_telp" 
                                    name="no_telp" 
                                    value="{{ old('no_telp', $user->no_telp) }}"
                                    class="w-full bg-custom-500 shadow rounded-xl p-4 focus:ring-2 focus:ring-custom-300 focus:outline-none focus:border-0"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                </div>
    
    
    
                <!-- Submit Button -->
                <div class="text-end">
                    <button 
                        type="submit" 
                        class="bg-custom-200 hover:bg-custom-300 text-white font-bold py-3 px-14 rounded-lg shadow-lg transition transform hover:scale-105">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('gambar');
    const preview = document.getElementById('preview');
    const uploadPrompt = document.getElementById('upload-prompt');

    function triggerFileInput() {
        fileInput.click();
    }

    function handleFileUpload(event) {
        const files = event.target.files;
        preview.innerHTML = '';
        if (files.length > 0) {
            const file = files[0];
            const reader = new FileReader();
            reader.onload = function (e) {
                uploadPrompt.classList.add('hidden');
                preview.classList.remove('hidden');
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full', 'h-full', 'object-cover');
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        } else {
            uploadPrompt.classList.remove('hidden');
            preview.classList.add('hidden');
        }
    }
</script>
@endsection

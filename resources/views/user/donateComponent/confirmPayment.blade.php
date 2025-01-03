@extends('layout.detailApp')

@section('content')
<div class="m-5">
    <div class="">
        <div class="flex justify-start items-center mb-4">
            <a href="{{ url()->previous() }}" onclick="window.history.back();" class="text-lg font-semibold flex items-center py-3 px-2 rounded-xl text-gray-600">
                <ion-icon name="chevron-back-outline" class="mr-1 text-xl"></ion-icon>
                Back to previous
            </a>            
        </div>
    </div>

    <div class="my-10 md:m-10 md:my-0">
        <div class="mb-5">
            <label class="flex items-center text-gray-600">
                <a href="" class="">Program</a>
                <ion-icon name="chevron-forward-outline" class="size-4 "></ion-icon>
                <a href="" class="">Donate</a>
                <ion-icon name="chevron-forward-outline" class="size-4 "></ion-icon>
                <span class="">Confirm Payments</span>
            </label>
            <span class="text-4xl font-bold text-custom-50">Confirm Payments</span>
        </div>

        <div class="border border-dashed p-4 border-4 border-custom-300 rounded-xl">
            <div class="grid grid-cols-1 md:flex md:gap-8 bg-white px-8 py-10 rounded-xl ">
                <div class="md:w-1/2">
                    <div class="">
                        <h1 class="text-center text-3xl font-bold text-custom-50 mb-2">Instruksi Pembayaran</h1>
                        <p class="text-center text-gray-600">Transfer sesuai nominal di bawah ini</p>
                        <h2 class="text-center text-4xl font-bold text-custom-200 my-6">Rp {{ number_format($jumlah, 0, ',', '.') }}</h2>
                        <p class="text-center text-gray-600">
                            ke rekening <strong class="font-semibold uppercase text-custom-50">{{ ucfirst($payment_method) }}</strong><br>
                            <span class="text-gray-800 text-xl font-semibold">
                                @if($payment_method === 'bri')
                                    2010 01 000510 537
                                @elseif($payment_method === 'mandiri')
                                    155 000 432525 7
                                @elseif($payment_method === 'bsi')
                                    7106536877
                                @endif
                            </span><br>
                            atas nama <strong class="font-semibold">
                                @if($payment_method === 'bri')
                                    Yayasan Nurul Jadid
                                @elseif($payment_method === 'mandiri')
                                    Yayasan Nurul Jadid
                                @elseif($payment_method === 'bsi')
                                    Yayasan Nurul Jadid Nusantara
                                @endif
                            </strong>
                        </p>
                
                        <!-- Detail Transaksi -->
                        <div class="mt-8">
                            <h3 class="text-center text-lg font-semibold text-gray-800 mb-4">Detail Transaksi</h3>
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div class="text-gray-600">ID Program</div>
                                <div class="text-gray-800 text-right">{{ $target->id }}</div>
                                <div class="text-gray-600">Nama Program</div>
                                <div class="text-gray-800 text-right">{{ $target->namaprogram }}</div>
                                <div class="text-gray-600">Jumlah Donasi</div>
                                <div class="text-gray-800 text-right">Rp {{ number_format($jumlah, 0, ',', '.') }}</div>
                                <div class="text-gray-600">Metode Pembayaran</div>
                                <div class="text-gray-800 text-right">{{ ucfirst($payment_method) }}</div>
                                <div class="text-gray-600">Catatan</div>
                                <div class="text-gray-800 text-right">{{ $notes ?? '-' }}</div>
                            </div>
                        </div>
    
                        <!-- Form -->
                        <form id="donationForm" action="{{ route('donation.submit', $target->id) }}" method="POST" enctype="multipart/form-data" class="mt-8">
                            @csrf
                            <input type="hidden" name="jumlah" value="{{ $jumlah }}">
                            <input type="hidden" name="payment_method" value="{{ $payment_method }}">
                            <input type="hidden" name="notes" value="{{ $notes }}">
    
                            <button
                                type="submit"
                                id="submit-button"
                                class="w-full bg-gradient-to-r from-custom-50 to-custom-75 text-white font-bold py-3 px-4 rounded-xl hover:from-custom-50 hover:to-custom-100 mt-4">
                                Konfirmasi Pembayaran
                            </button>
                        </form>
                    </div>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-0">
                    <!-- Dropzone untuk Unggah Bukti -->
                    <div id="dropzone" class="flex justify-center items-center px-6 pt-5 pb-6 border-2 border-gray-300 border rounded-2xl relative h-full cursor-pointer" onclick="triggerFileInput()">
                        <div id="upload-prompt" class="space-y-1 text-center">
                            <ion-icon name="cloud-upload-outline" class="mx-auto h-16 w-16 text-custom-75"></ion-icon>
                            <label class="block text-4xl font-semibold text-gray-700 text-center">Unggah Bukti Transfer</label>
                            <div class="flex text-sm text-gray-600 justify-center">
                                <label for="gambar" class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-500 hover:text-custom-300">
                                    <span>Upload a file</span>
                                    <input
                                    id="gambar"
                                    name="gambar"
                                    type="file"
                                    form="donationForm"
                                    class="sr-only"
                                    accept="image/jpeg, image/jpg, image/gif"
                                    onchange="handleFileUpload(event)"
                                />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        <div id="preview" class="absolute inset-0 flex items-center justify-center hidden cursor-pointer" onclick="triggerFileInput()"></div>
                    </div>
                    @error('gambar')
                        <div class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('gambar');
    const preview = document.getElementById('preview');
    const uploadPrompt = document.getElementById('upload-prompt');
    const submitButton = document.getElementById('submit-button');

    function triggerFileInput() {
        fileInput.click();
    }

    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.classList.add('border-blue-500', 'bg-blue-50');
    });

    dropzone.addEventListener('dragleave', () => {
        dropzone.classList.remove('border-blue-500', 'bg-blue-50');
    });

    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.classList.remove('border-blue-500', 'bg-blue-50');
        const files = e.dataTransfer.files;
        fileInput.files = files;
        handleFileUpload({ target: fileInput });
    });

    function handleFileUpload(event) {
    const files = event.target.files;
    preview.innerHTML = '';
    if (files.length > 0) {
        const file = files[0];
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/gif'];

        if (!allowedTypes.includes(file.type)) {
            alert('Hanya file bertipe JPG, JPEG, atau GIF yang diperbolehkan.');
            fileInput.value = ''; // Reset input file
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            uploadPrompt.classList.add('hidden');
            preview.classList.remove('hidden');
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('w-full', 'h-full', 'object-cover', 'rounded-2xl');
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
        } else {
            uploadPrompt.classList.remove('hidden');
            preview.classList.add('hidden');
        }
    }


    document.getElementById('donationForm').addEventListener('submit', function (e) {
        if (!fileInput.files.length) {
            e.preventDefault();
            alert('Silakan unggah bukti transfer sebelum mengonfirmasi pembayaran.');
            dropzone.classList.add('border-red-500');
        } else {
            dropzone.classList.remove('border-red-500');
        }
    });
</script>
@endsection


@extends('layout.app')

@section('content')
<div class="flex justify-center py-40 px-60">
    <div class="grid gap-2 w-full">
        <!-- Card Akun -->
        <div class="bg-slate-800 rounded-md p-4">
            <span class="text-white text-3xl font-bold mb-6">Akun</span>
            <div class="mt-6">
                <div class="flex justify-between items-center hover:bg-slate-900 hover:rounded p-2">
                    <div class="flex gap-2 items-center">
                        <ion-icon name="pencil-outline" class="bg-slate-400 p-2 size-5 rounded"></ion-icon>
                        <span class="text-white text-lg">Edit Profil</span>
                    </div>
                    <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                </div>

                <div class="flex justify-between items-center hover:bg-slate-900 hover:rounded p-2">
                    <div class="flex gap-2 items-center">
                        <ion-icon name="pencil-outline" class="bg-slate-400 p-2 size-5 rounded"></ion-icon>
                        <span class="text-white text-lg">Edit Profil</span>
                    </div>
                    <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                </div>
            </div>
        </div>

        <!-- Card Keamanan dan Privasi -->
        <div class="bg-slate-800 rounded-md p-4">
            <span class="text-white text-3xl font-bold mb-6">Keamanan dan Privasi</span>
            <div class="mt-6">
                <div class="flex justify-between items-center hover:bg-slate-900 hover:rounded p-2">
                    <div class="flex gap-2 items-center">
                        <ion-icon name="lock-open-outline" class="bg-slate-400 p-2 size-5 rounded"></ion-icon>
                        <span class="text-white text-lg">Ubah Kata Sandi</span>
                    </div>
                    <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

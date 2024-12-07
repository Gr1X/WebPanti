@extends('layout.app')

@section('content')
<div class="flex justify-center py-44 px-60">
    <div class="grid gap-2 w-full">
        <div class="bg-slate-800 rounded-lg p-4">
            <div class="my-2 mb-0">
                <div class="">
                    <ion-icon name="id-card-outline" class="text-white p-2 size-14 rounded"></ion-icon>
                </div>
                <div class="flex justify-between">
                    <div class="grid p-2 self-center">
                        <div class="">
                            <div>
                                <h1 class="text-[3rem] text-white font-bold">Gregorius Frederico</h1>
                            </div>
                        </div>
                        <div class="">
                            <div>
                                <h1 class="text-white italic">gregorius.frederico@student.umn.ac.id</h1>
                            </div>
                        </div>
                    </div>
            
                    <div class="w-36 h-36">
                        <img
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                            alt="card-image"
                            class="h-full w-full rounded-full object-cover"
                        />
                    </div>
                </div>
            </div>            
        </div>

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
            </div>
        </div>

        <!-- Card Keamanan dan Privasi -->
        <div class="bg-slate-800 rounded-md p-4">
            <span class="text-white text-3xl font-bold mb-6">Keamanan dan Privasi</span>
            <div class="mt-6">
                <div class="flex justify-between items-center hover:bg-slate-900 hover:rounded p-2">
                    <div class="flex gap-2 items-center">
                        <ion-icon name="newspaper-outline" class="bg-slate-400 p-2 size-5 rounded"></ion-icon>
                        <span class="text-white text-lg">Lihat history transaksi</span>
                    </div>
                    <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                </div>
                <div class="flex justify-between items-center hover:bg-slate-900 hover:rounded p-2">
                    <div class="flex gap-2 items-center">
                        <ion-icon name="lock-open-outline" class="bg-slate-400 p-2 size-5 rounded"></ion-icon>
                        <span class="text-white text-lg">Ubah Kata Sandi</span>
                    </div>
                    <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                </div>

                <div class="flex justify-between items-center hover:bg-slate-900 hover:rounded p-2">
                    <div class="flex gap-2 items-center">
                        <ion-icon name="key-outline" class="bg-slate-400 p-2 size-5 rounded"></ion-icon>
                        <span class="text-white text-lg">Lupa Password</span>
                    </div>
                    <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

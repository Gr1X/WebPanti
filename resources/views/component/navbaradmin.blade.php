<nav class="fixed top-0 z-50 w-full bg-slate-800 shadow-lg">
    <div class="flex justify-between items-center bg-custom-50">
        <!-- Navigation Menu -->
        <ul class="flex mx-4">
            {{-- Dashboard --}}
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="{{ route('admin.dashboard') }}" 
                    class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-3 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="grid-outline" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Dashboard</p>
                </a>
            </li>

            <!-- Programs -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="{{ route('admin.programs.index') }}" 
                    class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-3 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="briefcase-outline" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Programs</p>
                </a>
            </li>

            <!-- Edit Gallery -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="{{ route('admin.gallery.index') }}" 
                    class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-3 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="images-outline" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Gallery</p>
                </a>
            </li>

            <!-- Volunteers -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="{{ route('admin.volunteers.index') }}" 
                    class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-3 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="people-outline" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Volunteers</p>
                </a>
            </li>

            <!-- Payment -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="{{ route('admin.payments.index') }}" 
                    class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-3 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="wallet-outline" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Payment</p>
                </a>
            </li>

            <!-- Berita  -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="{{ route('admin.news.index') }}" 
                    class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-3 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="newspaper-outline" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Berita</p>
                </a>
            </li>
        </ul>

        <!-- User Dropdown -->
        <div class="mx-5 ml-auto">
            @if(Auth::check())
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" 
                    class="w-10 h-10 rounded-full cursor-pointer object-cover" 
                    src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" 
                    alt="{{ Auth::user()->name }}">
        
                <!-- Dropdown menu -->
                <div id="userDropdown" class="z-10 hidden bg-custom-350 divide-y divide-gray-100 rounded-lg shadow w-44">
                    <div class="px-4 py-3 text-sm text-custom-50">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="pt-2 text-sm text-custom-50" aria-labelledby="avatarButton">
                        <li>
                            <a href="{{ route('landing') }}" class="block px-4 py-2 hover:bg-custom-100">Back to Landing Page</a>
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-custom-100">Profile</a>
                        </li>
                        <div class="block px-4 py-2 text-sm text-custom-50 hover:bg-custom-100 rounded-b-lg">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block text-sm text-custom-50 hover:bg-custom-100">
                                    Sign out
                                </button>
                            </form>
                        </div>
                    </ul>
                </div>
            @else
                <a href="{{ route('login.form') }}" class="mx-4 relative group"> 
                    <button class="relative inline-block p-px font-semibold leading-6 text-white bg-custom-300 shadow-lg cursor-pointer rounded-xl transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95 border-gray-100">
                        <span class="relative z-10 block px-6 py-3 rounded-xl">
                            <div class="relative z-10 flex items-center space-x-2">
                                <span class="transition-all duration-500 group-hover:translate-x-5 text-slate-100">Get started</span>
                                <svg class="w-6 h-6 transition-transform duration-500 group-hover:translate-x-3 group-hover" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                        </span>
                    </button>
                </a>   
            @endif
        </div>        

        </div>
    </div>
</nav>

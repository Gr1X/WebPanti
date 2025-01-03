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
        <div class="mx-5">
            @if(Auth::check())
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" 
                    class="w-10 h-10 rounded-full cursor-pointer object-cover" 
                    src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" 
                    alt="{{ Auth::user()->name }}">

                <!-- Dropdown menu -->
                <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <!-- Link to Landing Page -->
                            <a href="{{ route('landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Back to Landing Page
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    Sign out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login.form') }}" class="mx-4 relative group"> 
                    <button class="relative inline-block p-px font-semibold leading-6 text-white bg-gray-800 shadow-2xl cursor-pointer rounded-xl shadow-zinc-900 transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95">
                        <span class="absolute inset-0 rounded-xl bg-gradient-to-r from-slate-100 via-slate-500 to-slate-900 p-[2px] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                        </span>
                        <span class="relative z-10 block px-6 py-3 rounded-xl bg-custom-100">
                            <span class="transition-all duration-500 group-hover:translate-x-5 text-slate-100">Get started</span>
                        </span>
                    </button>
                </a>   
            @endif

        </div>
    </div>
</nav>

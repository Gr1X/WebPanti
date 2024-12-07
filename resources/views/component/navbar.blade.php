<nav class="fixed top-0 z-50 w-full bg-slate-800 shadow-lg">
    <div class="flex justify-between items-center bg-slate-800">
        <!-- Navigation Menu -->
        <ul class="flex mx-4">
            <!-- Home -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="home" class="group-hover:scale-105 group-hover:size-5 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Home</p>
                </a>
            </li>
        
            <!-- Donation -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="heart" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                    <p class="font-semibold text-sm">Donation</p>
                </a>
            </li>
        
            <!-- Story -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="film" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>                    
                    <p class="font-semibold text-sm">Story</p>
                </a>
            </li>
        
            <!-- Program -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="flag" class="group-hover:scale-105 size-5 my-1 duration-500"></ion-icon>                        
                    <p class="font-semibold text-sm">Program</p>
                </a>
            </li>
        
            <!-- About Us -->
            <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-4 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                    <ion-icon name="people" class="group-hover:scale-105 size-5 my-1 duration-500"></ion-icon>                  
                    <p class="font-semibold text-sm">About Us</p>
                </a>
            </li>
        </ul>
        

        <!-- Get Started Button -->
        {{-- <a class="mx-4 relative group"> 
            <button class="relative inline-block p-px font-semibold leading-6 text-white bg-gray-800 shadow-2xl cursor-pointer rounded-xl shadow-zinc-900 transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95">
                <span class="absolute inset-0 rounded-xl bg-gradient-to-r from-slate-100 via-slate-500 to-slate-900 p-[2px] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                </span>

                <span class="relative z-10 block px-6 py-3 rounded-xl bg-gray-500">
                    <div class="relative z-10 flex items-center space-x-2">
                        <span class="transition-all duration-500 group-hover:translate-x-5 text-slate-100">Get started</span>
                        <svg class="w-6 h-6 transition-transform duration-500 group-hover:translate-x-3 group-hover" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                </span>
            </button>
        </a>    --}}


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
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>
                        @if(Auth::user()->role === 'admin')
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin Panel</a>
                            </li>
                        @endif
                    </ul>
                    <div class="py-1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login.form') }}" class="text-white bg-sky-500 px-4 py-2 rounded-md">Login</a>
            @endif
        </div>
    </div>

    <header class="bg-slate-100 drop-shadow-xl w-full">
        <div class="mx-2 max-w-7xl px-2 py-4 sm:px-6 lg:px-4">
            <h1 class="lg:text-2xl md:text-lg font-bold tracking-tight text-gray-900">Yayasan Nurul Jadid</h1>
        </div>
    </header>
    
</nav>

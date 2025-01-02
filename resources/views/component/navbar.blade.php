<nav class="fixed top-0 z-50 w-full bg-slate-800 shadow-lg">
    <div class="flex justify-between items-center bg-custom-50">
        <div>
            <button class="text-center relative flex-shrink-0 px-2 py-2 my-2 md:hidden" type="button" data-drawer-target="drawer-nav" data-drawer-show="drawer-nav" aria-controls="drawer-nav">
                <div class="inline-block flex flex-col items-center px-6 py-0.5 rounded-xl text-slate-100">    
                    <ion-icon name="menu" class="size-5 my-1"></ion-icon>
                    <p class="font-semibold text-sm">Menu</p>
                </div>
            </button>
        </div>
        <!-- Navigation Menu -->
            <ul class="hidden md:flex">
                <!-- Home -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="{{route('landing')}}" class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="home" class="group-hover:scale-105 group-hover:size-5 size-5 my-1 duration-300"></ion-icon>
                        <p class="font-semibold text-sm">Home</p>
                    </a>
                </li>
            
                <!-- Donation -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="{{route('donation')}}" class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="heart" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                        <p class="font-semibold text-sm">Donation</p>
                    </a>
                </li>
            
                <!-- Story -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="{{route('gallery')}}" class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="film" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>                    
                        <p class="font-semibold text-sm">Story</p>
                    </a>
                </li>
            
                <!-- Program -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="{{route('program')}}" class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="flag" class="group-hover:scale-105 size-5 my-1 duration-500"></ion-icon>                        
                        <p class="font-semibold text-sm">Program</p>
                    </a>
                </li>
            
                <!-- About Us -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-custom-100 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="{{route('aboutus')}}" class="inline-block flex flex-col items-center group-hover:bg-custom-100 px-4 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="people" class="group-hover:scale-105 size-5 my-1 duration-500"></ion-icon>                  
                        <p class="font-semibold text-sm">About Us</p>
                    </a>
                </li>
            </ul>
        <div id="drawer-nav" class="md:hidden fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-custom-75" tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-custom-400 uppercase">Menu</h5>
            <button type="button" data-drawer-hide="drawer-nav" aria-controls="drawer-nav" class="text-custom-400 bg-transparent rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center" >
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>
            <ul class="flex-col space-y-2">
                <li class="border-t border-gray-300 my-3"></li>
                <li>
                    <a href="{{route('landing')}}" class="block text-white font-semibold pt-2">
                        <ion-icon name="home" class="size-5 mr-2"></ion-icon> 
                        <span class="font-semibold text-xl">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('donation')}}" class="block text-white font-semibold pt-2">
                        <ion-icon name="heart" class="size-5 mr-2"></ion-icon> 
                        <span class="font-semibold text-xl">Donation</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('gallery')}}" class="block text-white font-semibold pt-2">
                        <ion-icon name="film" class="size-5 mr-2"></ion-icon> 
                        <span class="font-semibold text-xl">Story</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('program')}}" class="block text-white font-semibold pt-2">
                        <ion-icon name="flag" class="size-5 mr-2"></ion-icon> 
                        <span class="font-semibold text-xl">Program</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('aboutus')}}" class="block text-white font-semibold pt-2">
                        <ion-icon name="people" class="size-5 mr-2"></ion-icon> 
                        <span class="font-semibold text-xl">About Us</span>
                    </a>
                </li>
            </ul>
        </div>
        
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
                    <ul class="text-sm text-custom-50" aria-labelledby="avatarButton">
                        <li>
                            <a href="{{route('profile')}}" class="block px-4 py-2 hover:bg-custom-100">Profile</a>
                        </li>
                        @if(Auth::user()->role === 'admin')
                            <li class="block px-4 py-2 hover:bg-custom-100">
                                <a href="{{ route('admin.programs.index') }}" 
                                class="">
                                    Admin Panel
                                </a>
                            </li>
                        @endif
                    </ul>
                    <div class="block px-4 py-2 text-sm text-custom-50 hover:bg-custom-100 rounded-b-lg">
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="block text-sm text-custom-50 hover:bg-custom-100">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login.form') }}" class="mx-4 relative group"> 
                    <button class="relative inline-block p-px font-semibold leading-6 text-white bg-custom-300 shadow-lg cursor-pointer rounded-xl transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95 border-gray-100">
                        <span class="relative z-10 block px-6 py-3 rounded-xl">
                            <div class="relative z-10 flex items-center space-x-2">
                                <span class="transition-all duration-500 group-hover:translate-x-5 text-slate-100">Login</span>
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
</nav>

<header id="header" class="fixed top-20 w-full bg-custom-75 drop-shadow-xl transition-transform duration-500 ease-in-out z-40 rounded-b-2xl">
    <div class="mx-2 max-w-7xl px-2 py-4 sm:px-6 lg:px-4">
        <h1 class="lg:text-2xl md:text-lg font-bold tracking-tight text-custom-500">Yayasan Nurul Jadid</h1>
    </div>
</header>

<script>
    let lastScroll = 0;
const header = document.getElementById('header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > lastScroll) {
        // Scroll ke bawah - sembunyikan header
        header.classList.add('-translate-y-full');
    } else {
        // Scroll ke atas - tampilkan header
        header.classList.remove('-translate-y-full');
    }

    lastScroll = currentScroll; // Perbarui posisi scroll terakhir
});

</script>
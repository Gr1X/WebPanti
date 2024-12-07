<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select tab</label>
        <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Statistics</option>
            <option>Services</option>
        </select>
    </div>

    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse" 
        id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" 
                    class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                Pesan
            </button>
        </li>
        <li class="w-full">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" 
                    class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                Services
            </button>
        </li>
    </ul>

    <div id="fullWidthTabContent" class="border-gray-200 dark:border-gray-600">
        <!-- Tab Content: Statistics -->
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800 w-1/2" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            <div class="grid gap-4">
                <div class="grid">
                    <div class="flex gap-2">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="" class="w-20 h-20 rounded-full">
                        <div class="grid">
                            <div class="">
                                <h1 class="text-white text-lg mb-0 p-0">Gregorius Frederico</h1>
                                <p class="text-xs text-white">20 Januari 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-white my-2">
                        <span>Pesan-Pesan anda akan muncul disini dengan panjang maximal kata 50</span>
                    </div>
                    <hr class="my-2"/>
                </div>

                <div class="grid">
                    <div class="flex gap-2">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="" class="w-20 h-20 rounded-full">
                        <div class="grid">
                            <div class="">
                                <h1 class="text-white text-lg mb-0 p-0">Gregorius Frederico</h1>
                                <p class="text-xs text-white">20 Januari 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-white my-2">
                        <span>Pesan-Pesan anda akan muncul disini dengan panjang maximal kata 50</span>
                    </div>
                    <hr class="my-2"/>
                </div>
            </div>
        </div>

        <!-- Tab Content: Services -->
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
            <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the world’s potential</h2>
            <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="leading-tight">Dynamic reports and dashboards</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<nav class="mx-auto mt-[30px] flex max-h-12 w-full max-w-[1130px] items-center justify-between">
    <div class="flex gap-[30px]">
        <a href="{{ route('front.index') }}">
            <div class="h-[46px] w-[137px] shrink-0 overflow-hidden">
                <img class="h-full w-full object-contain" src="{{ asset('assets/images/logos/logo.svg') }}"
                    alt="" />
            </div>
        </a>
        <div class="h-12 w-px shrink-0 bg-[#E8EBF4]"></div>
        {{-- <form class="relative w-[450px]">
                    <label for="search" class="pointer-events-none flex">
                        <div class="absolute left-5 top-1/2 h-5 w-5 shrink-0 -translate-y-1/2 overflow-hidden">
                            <img class="h-full w-full object-contain" src="{{asset('assets/images/icons/search-black.svg') }}" alt="" />
                        </div>
                    </label>
                    <input
                        class="w-full rounded-full px-[50px] py-3 font-semibold ring-1 ring-[#E8EBF4] transition-all duration-300 placeholder:font-normal focus:outline-none focus:ring-2 focus:ring-maga-orange"
                        type="text"
                        name="search"
                        placeholder="Search hot trendy news today..."
                    />
                </form> --}}
    </div>
    <div class="flex w-full items-center justify-center gap-x-3" id="categories">
        <div class="">
            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                {{-- <div class="h-6 w-6 shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain"
                        src="{{ asset('assets/images/icons/status-up-black.svg') }}" alt="" />
                </div> --}}
                <p class="text-center font-semibold">Tentang Kami</p>
                <svg class="w-4 h-4 ms-1 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{ route('front.facilities') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Facility</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi & Misi
                            Misi</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sambutan
                            Rektor</a>
                    </li>
                    <li>
                        <a href="{{ route('front.histories') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah</a>
                    </li>
                </ul>
            </div>
        </div>

        <a href="#">
            <div
                class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                {{-- <div class="h-6 w-6 shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain" src="{{ asset('assets/images/icons/car-black.svg') }}"
                        alt="" />
                </div> --}}
                <p class="text-center font-semibold">SDM</p>
            </div>
        </a>
        <a href="{{ route('front.all_news') }}">
            <div
                class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                {{-- <div class="h-6 w-6 shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain" src="{{ asset('assets/images/icons/global-black.svg') }}"
                        alt="" />
                </div> --}}
                <p class="text-center font-semibold">Pengumuman</p>
            </div>
        </a>
        <a href="">
            <div
                class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                {{-- <div class="h-6 w-6 shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain" src="{{ asset('assets/images/icons/coffee-black.svg') }}"
                        alt="" />
                </div> --}}
                <p class="text-center font-semibold">Foods</p>
            </div>
        </a>
        <a href="{{ route('front.register') }}">
            <div
                class="flex max-w-[175px] gap-[10px] rounded-full bg-maga-orange px-[22px] py-3 hover:ring-2 hover:ring-black hover:bg-opacity-80 transition-all duration-300">
                {{-- <div class="h-6 w-6 shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain"
                        src="{{ asset('assets/images/icons/favorite-chart-white.svg') }}" alt="" />
                </div> --}}
                <p class="w-full text-center text-base font-semibold text-white">Pendaftaran</p>
            </div>
        </a>
    </div>
    {{-- <div class="flex">
        <a href="{{ route('front.register') }}">
            <div
                class="flex max-w-[175px] gap-[10px] rounded-full bg-maga-orange px-[22px] py-3 hover:ring-2 hover:ring-black hover:bg-opacity-80 transition-all duration-300">
                <div class="h-6 w-6 shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain"
                        src="{{ asset('assets/images/icons/favorite-chart-white.svg') }}" alt="" />
                </div>
                <p class="w-full text-center text-base font-semibold text-white">Pendaftaran</p>
            </div>
        </a>
    </div> --}}
</nav>
{{-- </div> --}}

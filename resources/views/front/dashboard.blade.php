@extends('layouts.app')

@section('content')
    <section id="hero-section" class="relative w-full overflow-hidden flex mx-auto mt-[30px]">
        <div class="swiper-hero w-full">
            <div class="swiper-wrapper">
                @foreach ($sliderItems as $item)
                    <div class="swiper-slide relative">
                        <div class="w-full h-[550px] overflow-hidden shrink-0">
                            <img src="{{ Storage::url($item->photo) }}" class="w-full h-full object-cover object-top"
                                alt="thumbnails" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                        <div
                            class="absolute flex bottom-0 left-0 right-0 items-center justify-between mx-auto max-w-[1280px] px-[75px] pb-[40px]">
                            <div class="flex flex-col gap-[10px] text-white">
                                <div class="w-[507px]">
                                    <a href="#"
                                        class="font-bold text-[36px] leading-[45px] hover:underline transition-all duration-300">{{ $item->title }}</a>
                                </div>
                                <p>{{ $item->subtitle }}</p>
                            </div>
                            <div class="flex gap-4">
                                <button type="button" id="prev-button"
                                    class="prev-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]"
                                        alt="icons" />
                                </button>
                                <button type="button" id="next-button"
                                    class="next-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]"
                                        alt="icons" />
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="partnership" class="mx-auto mt-[40px] flex max-h-[346px] w-full max-w-[1130px] flex-col items-center">
        <div class="flex max-w-[526px] flex-col items-center mb-[20px]">
            <h2 class="text-balance text-center text-[26px] font-semibold tracking-wide">Bekerjasama Dengan</h2>
        </div>
        <div class="grid grid-cols-5 gap-[30px]">
            @forelse ($partnerships as $partnershipItem)
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center rounded-[20px] px-[27px] py-[26px] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="h-[100px] w-[100px] shrink-0 overflow-hidden rounded-lg">
                            <img class="h-full w-full object-cover" src="{{ Storage::url($partnershipItem->image) }}"
                                alt="" />
                        </div>
                    </div>
                </a>
            @empty
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center  rounded-[20px] px-[27px] py-[26px] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Akan Hadir!</h3>
                        </div>
                    </div>
                </a>
            @endforelse
        </div>
    </section>

    <section id="about-us" class="flex mx-auto mt-[100px] max-h-[250px] w-full max-w-[1130px] items-center justify-evenly">
        <div class="flex max-w-[550px] flex-col mb-[20px]">
            <h2 class="text-balance text-[26px] font-semibold tracking-wide mb-3">Tentang Kami</h2>
            <p class="tracking-narrow mr-10">{{ $aboutUs->content ?? '' }}</p>
        </div>
        <div class="grid grid-cols-2 gap-y-2">
            @forelse ($aboutUs->photos as $index => $aboutUsPhotoItem)
                <a href="" class="{{ $index == 2 ? 'col-span-2' : '' }}">
                    <div
                        class="flex flex-col items-center rounded-[20px] max-h-[150px] {{ $index == 2 ? 'max-w-[240px]' : 'max-w-[110px] gap-x-10' }}">
                        <div class="h-full w-full overflow-hidden rounded-lg">
                            <img class="h-full w-full object-cover" src="{{ Storage::url($aboutUsPhotoItem->photo) }}"
                                alt="" />
                        </div>
                    </div>
                </a>
            @empty
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center rounded-[20px] px-[27px] py-[26px] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Akan Hadir!</h3>
                        </div>
                    </div>
                </a>
            @endforelse
        </div>
    </section>

    <section id="hot-news" class="mx-auto mt-[70px] flex max-h-[550px] max-w-[1130px] flex-col items-center gap-[30px]">
        <!-- Header Section -->
        <div class="flex max-h-[78px] w-full items-center justify-between">
            <h1 class="max-w-[259px] text-balance text-[26px] font-bold">Berita terkini untuk anda</h1>
            <div class="max-h-[37px] max-w-[117px] rounded-full bg-[#FFECE1]">
                <p class="px-[18px] py-2 text-center text-sm font-bold text-maga-orange">UP TO DATE</p>
            </div>
        </div>

        <!-- Swiper Container -->
        <div class="swiper-hot-news w-full overflow-hidden">
            <div class="swiper-wrapper">
                @forelse ($articles as $itemArticle)
                    <div class="swiper-slide">
                        <a href="{{ route('front.details_news', $itemArticle->slug) }}">
                            <div
                                class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                                <!-- Article Image with Badge -->
                                <div class="relative flex">
                                    <div
                                        class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center rounded-full bg-white px-[18px] py-2">
                                        <span class="text-center text-xs font-bold">{{ $itemArticle->headline }}</span>
                                    </div>
                                    <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                                        <img class="h-full w-full object-cover"
                                            src="{{ Storage::url($itemArticle->photo) }}" alt="News Image" />
                                    </div>
                                </div>

                                <!-- Article Content -->
                                <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
                                    <h2 class="text-balance text-lg font-bold">
                                        {{ \Illuminate\Support\Str::words($itemArticle->content, 8) }}
                                    </h2>
                                    <p class="text-sm text-[#A3A6AE]">
                                        {{ \Carbon\Carbon::parse($itemArticle->published_at)->format('d M, Y') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No data found</p>
                @endforelse
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-center gap-4 mt-1 py-2 px-2">
                <button type="button"
                    class="hot-news-prev p-[10px] ring-1 ring-black rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-black">
                    <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]"
                        alt="Previous" />
                </button>
                <button type="button"
                    class="hot-news-next p-[10px] ring-1 ring-black rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-black">
                    <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]"
                        alt="Next" />
                </button>
            </div>
        </div>
    </section>



    <section id="best-authors"
        class="mx-auto mt-[70px] flex max-h-[346px] w-full max-w-[1130px] flex-col items-center gap-[30px]">
        <div class="flex max-w-[526px] flex-col items-center">
            {{-- <div class="rounded-full bg-[#FFECE1] px-[18px] py-2">
                <p class="text-sm font-bold text-maga-orange">BEST AUTHORS</p>
            </div> --}}
            <h2 class="text-balance text-center text-[26px] font-bold">Rektorat Universitas</h2>
            <p>Berkomitmen untuk meningkatkan kualitas Pendidikan</p>
        </div>

        <div class="grid grid-cols-{{ $rectorat->count() }} gap-[10px] justify-items-center items-center">
            @forelse ($rectorat as $item)
                <a href="">
                    <div
                        class="flex max-h-[350px] max-w-[200px]  flex-col items-center gap-4 rounded-[20px] px-[27px] py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                            <img class="h-full w-full object-cover" src="{{ Storage::url($item->photo) }}"
                                alt="" />
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-wrap text-center font-semibold">{{ $item->name }}</h3>
                            <p class="text-center text-sm text-[#A3A6AE]">{{ $item->position }}</p>
                        </div>
                    </div>
                </a>
            @empty
                <a href="">
                    <div
                        class="flex max-h-[187px] max-w-[163px] flex-col items-center  rounded-[20px] px-[27px] py-[26px] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                        <div class="flex flex-col gap-1">
                            <h3 class="text-nowrap text-center font-semibold">Akan Hadir!</h3>
                        </div>
                    </div>
                </a>
            @endforelse
        </div>
    </section>


    <section id="for-you-entertainment" class="max-w-[1130px] mx-auto mt-[70px] mb-[50px]">
        <div class="flex flex-col">
            <h1 class="font-bold text-[26px] leading-[39px]">
                Pengumuman
            </h1>
            <p>Dapatkan pengumuman terbaru</p>
        </div>

        <div class="mt-[30px] max-h-[424px] flex justify-between">
            @forelse ($announcements as $index => $itemAnnouncement)
                @if ($index == 0)
                    <a href="{{ route('front.details_news', $itemAnnouncement->slug) }}">
                        <div class="relative overflow-hidden rounded-[20px] border">
                            <div class="h-full w-full max-w-[635px]">
                                <img src="{{ Storage::url($itemAnnouncement->photo) }}" alt=""
                                    class="w-full h-full object-cover" />
                            </div>
                            <div
                                class="absolute inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0)_0%,rgba(0,0,0,0.9)_100%)]">
                            </div>
                            <div class="text-white space-y-[10px] absolute bottom-[30px] left-[30px]">
                                <p>Featured</p>

                                <h1 class="font-bold text-[30px] leading-9 hover:underline pr-[30px]">
                                    {{ $itemAnnouncement->headline }}</h1>
                    </a>
                    <p>{{ \Carbon\Carbon::parse($itemAnnouncement->published_at)->format('d M, Y') }}</p>
        </div>
        </div>
        </a>
        @endif
    @empty
        <p>No data found</p>
        @endforelse



        <div class="relative" id="custom-scrollbar">
            <div class="max-w-[475px] space-y-[20px] pr-4 max-h-[424px] overflow-auto" id="custom-scrollbar">
                @forelse ($announcements as $index => $itemAnnouncement)
                    @if ($index > 0)
                        <a href="{{ route('front.details_news', $itemAnnouncement->slug) }}">
                            <div
                                class="border border-[#EEF0F7] p-[14px] rounded-[20px] items-center flex space-x-4 hover:border-[#FF6B18] transition-all duration-300">
                                <div class="h-[100px] w-[130px] flex-shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="{{ Storage::url($itemAnnouncement->photo) }}" alt=""
                                        class="h-full w-full object-cover" />
                                </div>
                                <div class="space-y-[6px] flex-1">
                                    <h1 class="text-lg leading-[27px] font-bold">
                                        {{ \Illuminate\Support\Str::words($itemAnnouncement->content, 8) }}</h1>
                                    <p class="text-[#A3A6AE] text-sm">
                                        {{ \Carbon\Carbon::parse($itemAnnouncement->published_at)->format('d M, Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endif
                @empty
                    <p>No data found</p>
                @endforelse
                <div class="w-full h-[100px]"></div>
            </div>
            <div class="pr-4 absolute bottom-0 w-full h-[100px]">
                <div class="w-full h-full bg-[linear-gradient(360deg,#FFFFFF_16%,rgba(255,255,255,0.19)_100%)]"></div>
            </div>
        </div>
        </div>
    </section>
@endsection

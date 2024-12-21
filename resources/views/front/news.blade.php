@extends('layouts.app')

@section('content')

    <section class="mt-[30px] max-w-[1280px] mx-auto px-[365px] space-y-[30px]">
      <h1 class="font-bold text-4xl leading-[45px] text-center">
        Explore Hot Trending <br />
        Good News Today
      </h1>
      <form class="relative w-full">
        <label for="search" class="pointer-events-none flex">
          <div class="absolute left-5 top-1/2 h-5 w-5 shrink-0 -translate-y-1/2 overflow-hidden">
            <img class="h-full w-full object-contain" src="{{ asset ('assets/images/icons/search-black.svg') }}" alt="" />
          </div>
        </label>
        <input
          class="w-full rounded-full px-[50px] py-3 font-semibold ring-1 ring-[#E8EBF4] transition-all duration-300 placeholder:font-normal focus:outline-none focus:ring-2 focus:ring-maga-orange"
          type="text"
          name="search"
          placeholder="Search hot trendy news today..."
        />
      </form>
    </section>

    <section id="hot-news" class="mx-auto mt-[30px] mb-[100px] flex w-full max-w-[1130px] flex-col items-center gap-[30px]">
      <div class="flex max-h-[78px] w-full items-center justify-between">
        <h1 class="text-balance text-[26px] font-bold">Search Result: Sepeda</h1>
      </div>
      <div class="grid w-full grid-cols-3 gap-[30px] focus:ring-maga-orange">
        @forelse ($announcements->take(6) as $itemArticle)
        <a href="{{ route('front.details_news', $itemArticle->slug) }}">
          <div class="flex max-w-[357px] flex-col gap-4 rounded-[20px] px-5 py-[26px] ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
            <div class="relative flex">
              <div class="absolute left-5 top-5 flex max-h-[34px] w-fit items-center justify-center rounded-full bg-white px-[18px] py-2">
                <span class="text-center text-xs font-bold">ENTERTAINMENT</span>
              </div>
              <div class="h-[200px] w-full overflow-hidden rounded-[20px]">
                <img class="h-full w-full object-cover" src="{{ Storage::url($itemArticle->photo) }}" alt="" />
              </div>
            </div>
            <div class="flex max-h-[81px] w-full flex-col gap-[6px]">
              <h2 class="text-balance text-lg font-bold">{{ $itemArticle->headline }}</h2>
              <p class="text-sm text-[#A3A6AE]">{{ \Carbon\Carbon::parse($itemArticle->published_at)->format('d M, Y') }}</p>
            </div>
          </div>
        </a>
        @empty
            <p>No data found</p>
        @endforelse
      </div>
    </section>

@endsection

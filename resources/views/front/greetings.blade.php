@extends('layouts.app')

@section('content')
    @forelse ($greeting->take(1) as $item)
    {{-- {{ dd($greeting) }} --}}
        <section id="header" class="w-[1130px] mt-[20px] mx-auto flex flex-col gap-y-1">
            <h1 class="font-bold text-[46px] leading-[60px]">Sambutan Rektor</h1>
            <h3 class="font-semibold">Meraih Masa Depan dengan Semangat Kebersamaan</h3>
        </section>
        <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-5 mt-[50px] mb-[30px]">
            <!-- Image Section -->
            <div id="HeroPhoto" class="w-1/2 h-[500px] flex justify-center items-center overflow-hidden">
                <img src="{{ Storage::url($item->image) }}" alt="image"
                    class="object-cover w-full h-full rounded-2xl" />
            </div>

            <!-- Content Section -->
            <article class="w-1/2">
                <p class="text-md">
                    {!! $item->content !!}
                </p>
            </article>
        </section>
    @empty
        <p>Akan Hadir!</p>
    @endforelse
@endsection

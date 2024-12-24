@extends('layouts.app')

@section('content')
    @forelse ($histories->take(1) as $history)
        <section id="header" class="w-[1130px] mt-[20px] mx-auto flex flex-col gap-y-1">
            <h1 class="font-bold text-[46px] leading-[60px]">Sejarah Universitas</h1>
            <h3 class="font-semibold">Bersama Membangun Cendekiawan Bangsa</h3>
        </section>
        <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-5 mt-[50px] mb-[30px]">
            <!-- Image Section -->
            <div id="HeroPhoto" class="w-1/2 h-[500px] flex justify-center items-center overflow-hidden">
                <img src="{{ Storage::url($history->image) }}" alt="image"
                    class="object-cover w-full h-full rounded-2xl" />
            </div>

            <!-- Content Section -->
            <article class="w-1/2">
                <p class="text-md">
                    {{ $history->content }}
                </p>
            </article>
        </section>
    @empty
        <p>nod data</p>
    @endforelse
@endsection

@extends('layouts.app')

@section('content')
    @forelse ($facilities as $itemFacility)
        <section id="header" class="w-[1130px] mt-[20px] mx-auto flex flex-col gap-y-1">
            <h1 class="font-bold text-[46px] leading-[60px]">Fasilitas Universitas</h1>
            <h3 class="font-semibold">Menciptakan Lingkungan Akademis Terbaik</h3>
        </section>
        <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-5 mt-[50px] mb-[30px]">
            <!-- Image Section -->
            <div id="HeroPhoto" class="w-1/3 h-[250px] flex justify-center items-center overflow-hidden">
                <img src="{{ Storage::url($itemFacility->image) }}" alt="image"
                    class="object-cover w-full h-full rounded-2xl" />
            </div>

            <!-- Content Section -->
            <article class="w-2/3">
                <p class="text-sm">
                    {!! $itemFacility->content !!}
                </p>
            </article>
        </section>
    @empty
        <p>nod data</p>
    @endforelse
@endsection

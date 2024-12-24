@extends('layouts.app')

@section('content')
    @forelse ($vissionMission->take(1) as $item)
        {{-- {{ dd($vissionMission) }} --}}
        <section id="header" class="w-[1130px] mt-[20px] mx-auto flex flex-col gap-y-1">
            <h1 class="font-bold text-[46px] leading-[60px]">Visi & Misi Universitas</h1>
            <h3 class="font-semibold">Visi & Misi Jelas untuk Tujuan Gemilang</h3>
        </section>
        <section id="Photos" class="max-w-[1130px] mx-auto flex mt-[50px] mb-[30px] items-start">
            @foreach ($item->photos as $img)
                <img src="{{ Storage::url($img->photo) }}" alt="image" class="object-cover w-1/3 h-full" />
            @endforeach
        </section>
        <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-5 mt-[50px] mb-[30px] items-start">
            <!-- Image Section -->
            <article id="Vission" class="w-1/2 flex-col justify-center items-center overflow-hidden ">
                <h3 class="font-bold">Visi</h3>
                <p class="text-sm">{!! $item->visi !!}</p>
            </article>
            <article id="Vission" class="w-1/2 flex-col justify-center items-center overflow-hidden ">
                <h3 class="font-bold">Misi</h3>
                <p class="text-sm">{!! $item->misi !!}</p>
            </article>
        </section>
    @empty
        <p>Akan Hadir!</p>
    @endforelse
@endsection

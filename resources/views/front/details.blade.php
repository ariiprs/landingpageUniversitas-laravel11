@extends('layouts.app')

@section('content')

    <section id="Header" class="w-[770px] mt-[20px] text-center mx-auto flex flex-col">
      <p class="text-[#A3A6AE]">{{ \Carbon\Carbon::parse($article->published_at)->format('d M, Y') }}</p>
      <h1 class="font-bold text-[46px] leading-[60px]">{{ $article->headline }}</h1>

    </section>


    <section id="HeroPhoto" class="h-[500px] flex justify-center items-center overflow-hidden w-full">
      <img src="{{ Storage::url($article->photo) }}" alt="image" class="object-cover w-2/4 h-full rounded-2xl" />
    </section>
    <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-20 mt-[50px] mb-[30px]">
      <article>
        <p>
          {{ $article->content }}
        </p>
      </article>

    </section>
@endsection

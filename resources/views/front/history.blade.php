@extends('layouts.app')

@section('content')

@forelse ($histories->take(1) as $history)
    <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-5 mt-[50px] mb-[30px]">
    <!-- Image Section -->
    <div id="HeroPhoto" class="w-1/2 h-[500px] flex justify-center items-center overflow-hidden">
        <img src="{{ Storage::url($history->image) }}" alt="image" class="object-cover w-full h-full rounded-2xl" />
    </div>

    <!-- Content Section -->
    <article class="w-1/2">
        <p class="text-sm">
            {{ $history->content }}
        </p>
    </article>
</section>
@empty
    <p>nod data</p>
@endforelse

@endsection

@extends('layouts.app')

@section('content')

@forelse ($facilities as $itemFacility)
    <section id="ContainerArticle" class="max-w-[1130px] mx-auto flex gap-5 mt-[50px] mb-[30px]">
    <!-- Image Section -->
    <div id="HeroPhoto" class="w-1/2 h-[250px] flex justify-center items-center overflow-hidden">
        <img src="{{ Storage::url($itemFacility->image) }}" alt="image" class="object-cover w-full h-full rounded-2xl" />
    </div>

    <!-- Content Section -->
    <article class="w-2/2">
        <p class="text-sm">
            {{ $itemFacility->content }}
        </p>
    </article>
</section>
@empty
    <p>nod data</p>
@endforelse

@endsection

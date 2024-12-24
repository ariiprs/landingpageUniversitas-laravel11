@extends('layouts.app')

@section('content')
    <section id="lecturer" class="w-[1000px] mt-[20px] mx-auto flex flex-col gap-y-1">
        <h1 class="font-bold text-[46px] leading-[60px]">Data Dosen</h1>
        <h3 class="font-semibold">Dosen dengan Kompetensi Terbaik untuk Menunjang Perkuliahan</h3>
    </section>

    <section id="lecturer-content" class="flex-col mx-auto mt-10 w-full max-w-[1000px] mb-[100px]">
        @foreach ($lecturers as $item)
        <div class="flex flex-wrap items-start gap-10 mt-10">
            <div class="flex flex-col items-center rounded-2xl max-w-[250px]">
                <div class="h-auto w-full overflow-hidden rounded-lg">
                    <img class="h-full w-full object-cover" src="{{ Storage::url($item->photo) }}" alt="Profile Photo" />
                </div>
            </div>
            <div class="flex flex-col max-w-full mb-5">
                <h2 class="text-[26px] font-semibold tracking-wide mb-3">{{ $item->name }}</h2>
                <ul class="mt-4 space-y-2 list-disc list-inside">
                    <li class="flex">
                        <span class="font-medium w-32">NIDN</span>
                        <span>: {{ $item->nomor_induk }} </span>
                    </li>
                    <li class="flex">
                        <span class="font-medium w-32">Pendidikan</span>
                        <span>: {{ $item->education }}</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium w-32">Jabatan</span>
                        <span>: {{ $item->position }} </span>
                    </li>
                    <li class="flex">
                        <span class="font-medium w-32">Topik</span>
                        <span>: {{ $item->topic }} </span>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </section>    

    <section id="staff" class="w-[1000px] mt-[100px] mx-auto flex flex-col gap-y-1">
        <h1 class="font-bold text-[46px] leading-[60px]">Data Tenaga Pendidikan</h1>
        <h3 class="font-semibold]">Tendik Universitas Science</h3>
    </section>

    <section id="staff-content" class="flex-col mx-auto mt-10 w-full max-w-[1000px] mb-[100px]">
        @foreach ($staff as $item)
        <div class="flex flex-wrap items-start gap-10 mt-10">
            <div class="flex flex-col items-center rounded-2xl max-w-[250px]">
                <div class="h-auto w-full overflow-hidden rounded-lg">
                    <img class="h-full w-full object-cover" src="{{ Storage::url($item->photo) }}" alt="Profile Photo" />
                </div>
            </div>
            <div class="flex flex-col max-w-full mb-5">
                <h2 class="text-[26px] font-semibold tracking-wide mb-3">{{ $item->name }}</h2>
                <ul class="mt-4 space-y-2 list-disc list-inside">
                    <li class="flex">
                        <span class="font-medium w-32">NIDN</span>
                        <span>: {{ $item->nomor_induk }} </span>
                    </li>
                    <li class="flex">
                        <span class="font-medium w-32">Jabatan</span>
                        <span>: {{ $item->position }} </span>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </section> 
@endsection

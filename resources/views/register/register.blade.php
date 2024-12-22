<!-- filepath: /c:/Users/Arie Prasetyo/Documents/PZN/laravel/BWA/laravelInstallr/baru-univ/resources/views/register/register.blade.php -->
@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white border border-black p-8 rounded-lg mt-4 mb-4">
    <form action="{{ route('register.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-wrap -mx-4">
        @csrf
        <div class="w-full md:w-1/2 px-4 mb-5">
            <label for="full_name" class="block mb-2 text-sm font-medium text-black">Full Name</label>
            <input type="text" id="full_name" name="full_name" class="block w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="w-full md:w-1/2 px-4 mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-black">Email</label>
            <input type="email" id="email" name="email" class="block w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="w-full md:w-1/2 px-4 mb-5">
            <label for="admission_type" class="block mb-2 text-sm font-medium text-black">Admission Type</label>
            <input type="text" id="admission_type" name="admission_type" class="block w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="w-full md:w-1/2 px-4 mb-5">
    <label for="photo" class="block mb-2 text-sm font-medium text-black">Photo</label>
    <div class="relative flex items-center">
        <input type="file" id="photo" name="photo" class="block w-full text-black border border-gray-300 rounded-lg bg-white p-4 opacity-0 absolute inset-0 z-10 cursor-pointer" onchange="updateFileName()">
        <div id="photo-label" class="flex items-center justify-center w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500">
            <svg class="w-6 h-6 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6-6 6M21 7l-6 6 6 6"></path>
            </svg>
            <span id="photo-filename" class="text-sm font-medium">Choose a file</span>
        </div>
    </div>
</div>
        <div class="w-full md:w-1/2 px-4 mb-5">
            <label for="nickname" class="block mb-2 text-sm font-medium text-black">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="block w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="w-full md:w-1/2 px-4 mb-5">
            <label for="phone_number" class="block mb-2 text-sm font-medium text-black">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" class="block w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="w-full md:w-1/2 px-4 mb-5">
            <label for="first_major" class="block mb-2 text-sm font-medium text-black">First Major</label>
            <select id="first_major" name="first_major" class="block w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-gray-500">
                <option value="sistem informasi">Sistem Informasi</option>
                <option value="teknik informatika">Teknik Informatika</option>
                <option value="mathematic">Mathematic</option>
            </select>

        </div>

        <div class="w-full md:w-1/2 px-4 mb-5">
            <label for="second_major" class="block mb-2 text-sm font-medium text-black">Second Major</label>
            <select id="second_major" name="second_major" class="block w-full p-4 text-black border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-gray-500">
                <option value="sistem informasi">Sistem Informasi</option>
                <option value="teknik informatika">Teknik Informatika</option>
                <option value="mathematic">Mathematic</option>
            </select>
        </div>


        <div class="w-full md:w-1/2 px-4 mb-5">
            <button type="submit" class=" block w-1/2 p-4 text-white bg-blue-500 rounded-lg hover:bg-blue-600 hover:ring-4 hover:ring-yellow-600 focus:ring-4 focus:ring-blue-300">Submit</button>
        </div>
    </form>
</div>

@if(session('success'))
    <div id="success-message" data-message="{{ session('success') }}"></div>
@endif

@endsection

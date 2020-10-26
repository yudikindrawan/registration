@extends('layouts.master')
@section('title', 'Registration Form')

@section('content')
    <div class="w-screen">
        <img src="{{ asset('assets/img/background.png') }}" alt="" class="max-h-screen float-right">
    </div>
    <div class="py-16 ml-32">
        <h3 class="text-6xl font-black ">LOGO</h3>
    </div>
    <div class="pt-32 ml-32">
        <h4 class="text-5xl font-bold">Registration Form</h4>
        <p class="font-semibold ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="pt-10 ml-32">
        <a href="{{ URL::to('/register-view')}}"><button class="bg-blue-500 w-48 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Register</button></a>
        
        <a href="{{ URL::to('/detail-view')}}"><button class="bg-gray-500 w-48 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">Detail</button></a>
    </div>
@endsection
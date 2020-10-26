@extends('layouts.master')
@section('title', 'Login Form')

@section('content')
    <div class="fixed grid grid-cols-1">
        <img src="{{ asset ('assets/img/background-register.png')}}" alt="" class="">
    </div>
    <div class="relative grid  grid-cols-4">
        <div class="col-start-2 col-span-2 mt-24">
            <div class="bg-white shadow-md rounded flex flex-col my-2 px-8 pt-6 pb-8 mb-4">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="email" name="email" placeholder="example@email.com">
                        </div>
                    </div>

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Password
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" name="password" placeholder="password">
                        </div>
                    </div>

                    <div class="pt-5">
                        <button type="submit" class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
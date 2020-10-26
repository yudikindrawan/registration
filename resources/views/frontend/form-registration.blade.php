@extends('layouts.master')
@section('title', 'Registration Form')

@section('content')
    <div class="fixed grid grid-cols-1">
        <img src="{{ asset ('assets/img/background-register.png')}}" alt="" class="">
    </div>
    <div class="relative grid  grid-cols-4">
        <div class="col-start-2 col-span-2 mt-24">
            <div class="bg-white shadow-md rounded flex flex-col my-2 px-8 pt-6 pb-8 mb-4">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Full Name
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" type="text" name="fullname" placeholder="full name">
                        </div>
                    </div>

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="email" name="email" placeholder="example@email.com">
                        </div>
                    </div>
                    
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                birthday
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" name="birthday" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                                No Telephone
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" name="notelp" placeholder="081456788xxx">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                                Address
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" name="address" placeholder="Street:  Jl Asia Afrika 8 Plaza Senayan, Dki Jakarta">
                        </div>
                    </div>

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                City
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" name="city" placeholder="Jakarta">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                Country
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state" name="country">
                                <option selected>Indonesia</option>
                                </select>
                                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                                Zip
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" name="zip" placeholder="90210">
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
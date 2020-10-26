@extends('layouts.master')
@section('title', 'Detail Registration')

@section('content')
        <div class="fixed grid grid-cols-1">
            <img src="{{ asset ('assets/img/background-register.png')}}" alt="" class="">
        </div>
        <div class="relative grid">
            <div class="mt-5 ml-5 mr-5">
                <div class="bg-white shadow-md rounded flex flex-col my-2 px-8 pt-6 pb-8 mb-4">
                    <h3 class="font-semibold py-5 text-xl">Data User</h3>
                    {{-- <form action="{{ route('logout') }}" method="POST" class="mb-2">
                        @csrf
                        <button type="submit" class="bg-red-500 w-48 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Logout</button>
                    </form> --}}
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Email</th>
                                <th class="border px-4 py-2">Birthday</th>
                                <th class="border px-4 py-2">Address</th>
                                <th class="border px-4 py-2">No Telp</th>
                                <th class="border px-4 py-2">Status</th>
                                <th class="border px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="border px-4 py-2">{{$item->name}}</td>
                                    <td class="border px-4 py-2">{{$item->email}}</td>
                                    <td class="border px-4 py-2">{{$item->birthday}}</td>
                                    <td class="border px-4 py-2">{{$item->address}}</td>
                                    <td class="border px-4 py-2">{{$item->notelp}}</td>
                                    <td class="border px-4 py-2">
                                        @if ($item->status == 'approve')
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-green-600 bg-green-200 last:mr-0 mr-1">{{$item->status}}</span>
                                        @else
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-pink-600 bg-pink-200 last:mr-0 mr-1">{{$item->status}}</span>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        <form action="{{ route('approve-user', $item->id )}}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-blue-500 w-48 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Ubah Status</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
@endsection
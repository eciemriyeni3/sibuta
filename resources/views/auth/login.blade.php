@extends('layouts.app')
@section('content')
    <div class=" h-screen border-black  mx-auto my-auto flex justify-center font-['Poppins']">
        <div class="mx-auto my-auto justify-center w-3/4 lg:w-1/2">
            <h1 class="text-3xl font-semibold">Login</h1>
            <form class="py-10 space-y-5" action="{{route('actionlogin')}}" method="POST">
                @csrf
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                    <input type="text" id="first_name" name="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-12"
                        placeholder="Ketik username" required />
                </div>
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                    <input type="password" id="first_name" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-12"
                        placeholder="Ketik password" required />
                </div>
                <div>
                    <button
                        class="bg-[#7D0A0A] text-md font-semibold w-full text-center mx-auto text-white py-3 rounded-lg">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection

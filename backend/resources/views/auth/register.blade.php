@extends('layout.master')


@section('content')

  <div class="max-w-3xl mx-auto rounded p-2">

    <h2 class="text-2xl">Register</h2>

    <form action="{{ route('register') }}" method="post">
      <div class="flex flex-col gap-3 mt-3">
        @csrf
        <div>
          <input type="text" name="name" class="max-w-max px-2 py-1 border border-gray-300 rounded focus:ring-1" placeholder="Name">
          @error('name')  
           {{ $message }}
          @enderror
        </div>

        <div>
          <input type="emal" name="email" class="max-w-max px-2 py-1 border border-gray-300 rounded focus:ring-1" placeholder="E mail">
          @error('email')  
           {{ $message }}
          @enderror
        </div>

        <div>
          <input type="password" name="password" class="max-w-max px-2 py-1 border border-gray-300 rounded focus:ring-1" placeholder="password">
          @error('password')  
           {{ $message }}
          @enderror
        </div>

        <div>
          <input type="password" name="password_confirmation" class="max-w-max px-2 py-1 border border-gray-300 rounded focus:ring-1" placeholder="passwod confirmation">
        </div>

        <button class="text-white bg-blue-700 px-5 py-1 rounded hover:opacity-90 max-w-max">Register</button>
      </div>
    </form>
  </div>

@endsection

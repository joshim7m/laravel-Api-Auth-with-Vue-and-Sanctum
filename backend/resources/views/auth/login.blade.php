@extends('layout.master')


@section('content')

  <div class="max-w-3xl mx-auto rounded p-2">
    <h2 class="text-2xl">Login</h2>

    <form action="{{ route('login') }}" method="post">
      <div class="flex flex-col gap-3 mt-3">
        @csrf

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


        <button class="text-white bg-blue-700 px-5 py-1 rounded hover:opacity-90 max-w-max">Login</button>
      </div>
    </form>
  </div>

@endsection

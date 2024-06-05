@extends('layout.master')

@section('content')

  <div>
    Welcome {{ Auth::user()->name }}
  </div>

@endsection 
@extends('layouts.default')

@section('title', '画像アップロード')
@section('content')
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    <img src="{{ asset('storage/photos/' . $fileName) }}" alt="" srcset="">
@endsection()
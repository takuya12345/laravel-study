@extends('layouts.default')

@section('title', 'アップロード画像の表示')
@section('content')
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    {{-- <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>画像：<input type="file" name="image"></label>
        <button type="submit">アップロード</button>
    </form> --}}
    <img src="{{ asset('storage/photos/' . $fileName) }}">

    <form action="{{ route('photos.destroy', ['photo' => $fileName]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button>
    </form>
@endsection()
@extends('layouts.default')

@section('title', 'GET FORM')
@section('content')
    <form action="/query-strings" method="GET">
        <label>keyword: <input type="text" name="keyword"></label>
        <button type="submit">submit</button>
    </form>
@endsection
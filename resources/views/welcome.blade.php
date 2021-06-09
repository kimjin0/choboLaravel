@extends('layout')

@section('title')
    홈
@endsection

@section('content')
    <strong>Home</strong>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection
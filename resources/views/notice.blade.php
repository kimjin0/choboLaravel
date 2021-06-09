@extends('layout')

@section('title')
    공지사항
@endsection

@section('content')
    <b>공지사항 입니다.</b>
    <ul>
        @foreach ($items as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection
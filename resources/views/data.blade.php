@extends('layout')

@section('title')
    자료실
@endsection

@section('content')
    자료실
    <ul>
       @foreach ($items as $item)
           <li>{{$item}}</li>
       @endforeach
    </ul>
@endsection

@section('lifeSeqNo')
    @parent
    <p>134053</p>
@endsection
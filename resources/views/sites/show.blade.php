@extends('layouts.app')

@section('content')
@section('title'){{$site->title}} @endsection
@section('content')
    <h1>{{$site->title}}</h1>
    <div>{{$site->description}}</div>
@endsection

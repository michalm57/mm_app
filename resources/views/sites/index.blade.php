@extends('layouts.app')

@section('content')
@section('title')mm_app @endsection
<div style="text-align:center;">
<a href = http://127.0.0.1:8000/add>Add page</a>

<table class="table table-hover">
    @foreach($sites as $site)
        <tr>
            <td><a href="{{route('sites.show', $site)}}">{{$site->title}}</a></td>
            <td>{{$site->description}}</td>
        </tr>
    @endforeach
</div>
@endsection
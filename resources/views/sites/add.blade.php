@extends('layouts.app')

@section('content')
@section('title')Dodawanie strony @endsection
@section('content')
    <br>
    <form action="{{route('sites.save')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="title" class="form-control"  placeholder="Podaj tytuł"/>
        </div><br>
        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Podaj treść"></textarea>
        </div><br>
        <div class="form-group">
            <button class="btn btn-primary">Zapisz</button>
        </div>
    </form>

@endsection

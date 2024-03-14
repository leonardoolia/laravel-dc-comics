@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')

<ul>
    <li class="list-unstyled">
        <div class="row text-center">
        <div class="col-6 mx-auto">
        <div class="card  w-75">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4 border-bottom">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <h5 class="card-title">{{$comic->price}}</h5>
                </div>
                <p>{{$comic->description}}</p>
            </div>
        </div>
        </div>
        </div>
    </li>
</ul>

@endsection
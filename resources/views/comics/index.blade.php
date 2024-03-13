@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<div class="row">
    @forelse($comics as $comic)
    <div class="col-2 mb-2">
        <div class="card">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
            </div>
        </div>
    </div>
    @empty
        <div class="col">
            <p>Non ci sono comics</p>
        </div>
    @endforelse
</div>

@endsection
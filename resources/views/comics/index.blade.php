@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<div class="row">
    @forelse($comics as $comic)
    <div class="col-2 mb-4">
    <a href="{{route('comics.show', $comic->id)}}" class="text-decoration-none">
        <div class="card">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
            </div>
        </div>
    </a>
    </div>
    @empty
        <div class="col">
            <p>Non ci sono comics</p>
        </div>
    @endforelse
    <a href="{{route('comics.create')}}"class="btn btn-primary w-25 my-4 mx-auto">Aggiungi fumetto</a>

</div>


@endsection
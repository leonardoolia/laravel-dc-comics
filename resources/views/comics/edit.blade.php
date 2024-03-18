@extends('layouts.main')

@section('title', 'Modifica fumetto')

@section('main-content')

<div class="card-title d-flex align-items-center justify-content-between mb-5 border-bottom">
    <h1>Modifica fumetto</h1>
    <a href="{{route('comics.index')}}" class="btn btn-secondary">Torna indietro</a>
</div>

<div class=card-body>
    @if($errors->any())
        <div class="alert alert-danger"> Ci sono i seguenti errori nel form:
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo fumetto</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Es: Batman: The Joker War Zone #1" value="{{old('title', $comic->title)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" name="series" class="form-control" id="series" placeholder="Es: Batman: White Knight Presents: Harley Quinn" value="{{old('series', $comic->series)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="Es: graphic novel" value="{{old('type', $comic->type)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Copertina</label>
                    <input type="url" name="thumb" class="form-control" id="image" placeholder="Es: https://...." value="{{old('thumb', $comic->thumb)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="date" class="form-label">Data di rilascio</label>
                    <input type="text" name="sale_date" class="form-control" id="date" placeholder="Es: 2020-08-25" value="{{old('sale_date', $comic->sale_date)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Es: $6.99" value="{{old('price', $comic->price)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input type="text" name="artists" class="form-control" id="artists" placeholder="Es: Guillem March, Ashley A. Woods,..." value="{{old('artists', $comic->artists)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input type="text" name="writers" class="form-control" id="writers" placeholder="Es: Sam Johns, Joshua Williamson,..." value="{{old('writers', $comic->writers)}}">
                </div>
            </div>
            <div class="col-12w border-bottom">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{old('description', $comic->description)}}</textarea>
                  </div>
            </div>
        </div>

        <div class="mt-4 d-flex align-items-center gap-2">
            <button type="submit" class="btn btn-primary">Modifica</button>
            <button type="reset" class="btn btn-secondary">Svuota i campi</button>
        </div>
    </form>
</div>

@endsection



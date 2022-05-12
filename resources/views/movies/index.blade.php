@extends('layouts.main')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                    @foreach ($movies as $movie)
                        <div class="col-4 mb-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movie->title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Original title: {{$movie->original_title}}</h6>
                                    <p class="card-text">Nationality: {{$movie->date}}</p>
                                    <p class="card-text">Date: {{$movie->date}}</p>
                                    <p class="card-text">Vote: {{$movie->vote}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
        
        
    </main>
    
@endsection
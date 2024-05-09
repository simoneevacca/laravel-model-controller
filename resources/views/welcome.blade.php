@extends('layouts.app')
@section('content')
<main>

          

    <div class="container">
        <h1>Movies List</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @forelse ($movies as $movie)
            <div class="col">
                <div class="card">
             
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Titolo:</strong> {{$movie->title}}</li>
                            <li class="list-group-item"><strong>Titolo originale:</strong> {{$movie->original_title}}</li>
                            <li class="list-group-item"><strong>Nazionalità:</strong> {{$movie->nationality}}</li>
                            <li class="list-group-item"><strong>Data:</strong> {{$movie->date}}</li>
                            <li class="list-group-item"><strong>Voto:</strong> {{$movie->vote}}</li>
                          </ul>

                        
                    </div>
                </div>
                @empty
                    <p>Nessun film disponibile</p>
                @endforelse
        </div>
    </div>
</main>
@endsection
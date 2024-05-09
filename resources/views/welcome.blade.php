@extends('layouts.app')
@section('content')
<main>

          

    <div class="container">
        <div class="row row-cols-4">

            @forelse ($movies as $movie)
            <div class="col">
                <div class="card">
                        <div>Titolo: {{$movie->title}}</div>
                        <div>Titolo originale: {{$movie->original_title}}</div>
                        <div>Nazionalità: {{$movie->nationality}}</div>
                        <div>Data: {{$movie->date}}</div>
                        <div>Voto: {{$movie->vote}}</div>


                        
                    </div>
                </div>
                @empty
                    <p>Nessun film disponibile</p>
                @endforelse
        </div>
    </div>
</main>
@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

        <main>

            <h1>ciao</h1>

            <div class="container">
                <div class="row row-cols-4">

                    @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card">
                                <div>Titolo: {{$movie->title}}</div>
                                
                            </div>
                        </div>
                        @empty
                            <p>Nessun film disponibile</p>
                        @endforelse
                </div>
            </div>
        </main>

</body>

</html>
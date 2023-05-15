<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.header')

    <main>
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <div>{{$movie->original_title}} - {{$movie->nationality}} - {{$movie->date}} - {{$movie->vote}}</div>

                    </div>
                </div>
            </div>

        @endforeach
    </main>

    @include('partials.footer')

</body>

</html>
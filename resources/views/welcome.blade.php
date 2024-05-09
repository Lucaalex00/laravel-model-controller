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

    <div class="container p-3">
        <div class="row row-cols-md-2 g-3">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card bg-light p-3 position-relative">
                        <h6 class="index_movie position-absolute top-0 end-0 p-3"> {{ $movie->id }}.</h6>
                        <div class="card_title">
                            <h3>{{ $movie->title }}</h3>
                            <h6>"{{ $movie->original_title }}"</h6>
                        </div>
                        <div class="card_body">
                            <img class="img_movie" src="https://picsum.photos/200" alt="">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ratione
                                    ad optio quod
                                    nulla delectus officiis nam adipisci, voluptatibus esse blanditiis dicta modi
                                    deleniti voluptatem, libero non, debitis atque? Ipsam.Amet saepe neque molestias
                                    vel? Debitis totam dolorum ea quam quis! Quidem dolor nihil repellendus ipsa
                                    veritatis architecto, pariatur blanditiis sunt officia ea sequi unde accusamus
                                    eligendi doloremque accusantium minus.
                                </p>
                                <strong>{{ $movie->nationality }}</strong>
                            </div>
                        </div>
                        <div class="card_footer text-end">
                            <div>Release date : <strong>{{ $movie->date }}</strong></div>
                            <div>Vote : <strong>{{ $movie->vote }}</strong></div>
                        </div>
                    </div>
                </div>
            @empty
                <h1>There aren't any movies</h1>
            @endforelse
        </div>
    </div>
</body>

</html>

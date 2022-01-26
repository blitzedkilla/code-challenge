<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Code Challenge</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: sans-serif;
            height: 100vh;
            margin: 50px;
        }

        .full-height {
            height: 100vh;
        }

        .result {
        }
    </style>
</head>
<body>
<div class="full-height">

    @if($artists)
    <div class="artists">
        Artists: 
        <ul>
            @foreach ($artists as $artist)
            <li>
                <a href="/detail/artists/{{ $artist->id }}"> {{ $artist->name }} </a>
                @if(count($artist->images) > 0)
                <img src="{{ $artist->images[0]->url }}" style="max-width: 10%;">
                @endif
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($albums)
    <div class="albums">
        Albums:
        <ul>
            @foreach ($albums as $album)
            <li>
                <a href="/detail/albums/{{ $album->id }}"> {{ $album->name }} </a>
                @if(count($album->images) > 0)
                <img src="{{ $album->images[0]->url }}" style="max-width: 10%;">
                @endif
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($tracks)
    <div class="tracks">
        Tracks:
        <ul>
            @foreach ($tracks as $track)
            <li>
                <a href="/detail/tracks/{{ $track->id }}"> {{ $track->name }} </a>
            @endforeach
        </ul>
    </div>
    @endif
</div>
</body>
</html>

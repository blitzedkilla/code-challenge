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
            <li>{{ $artist->name }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($albums)
    <div class="albums">
        Albums:
        <ul>
            @foreach ($albums as $album)
            <li>{{ $album->name }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($tracks)
    <div class="tracks">
        Tracks:
        <ul>
            @foreach ($tracks as $track)
            <li>{{ $track->name }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
</body>
</html>

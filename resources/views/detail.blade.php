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
        @if($data)
           <p>{{$entity}} Name: {{$data->name}}</p>
        <p>Properties: 
        @foreach ($data as $key => $items)
            <li>{{$key}}</li>

            
        @endforeach
        @endif
            

    </div>
</body>
</html>
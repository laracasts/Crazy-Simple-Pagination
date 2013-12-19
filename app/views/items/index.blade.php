<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
    @foreach(array_chunk($items->getCollection()->all(), 3) as $row)
        <div class="row">
           @foreach($row as $item)
                @include ('items/_item')
           @endforeach
        </div>
    @endforeach

    {{ $items->appends(Request::except('page'))->links() }}
</div>
</body>
</html>
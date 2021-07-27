<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach ($profiles as $item)
    <div class="card">
    <p>User ID: {{$item->user_id}}</p>
    <p>NID: {{$item->nid_no}}</p>
    <p>user: {{$item->user}}</p>
    <hr>
    </div>
@endforeach

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    @foreach($replyList as $replies)
        <div align="center"><h1>{{$replies->replyDescription}}</h1></div>
    @endforeach

</body>
</html>
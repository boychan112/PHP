@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lumanosimo&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Lumanosimo', cursive;
            text-align: center;
        }
        ul{
            list-style: none;
        }
        a{
            text-decoration:none;
        }
        .delete{
            background-color: red;
            border: 0px;
        }
        .details-ul{
            margin-top: 25%;
        }
        .todo-details{
            width: 100%;
            border-bottom: 1px dashed black;
            margin-bottom:2%;
            padding-bottom:2%;
        }
    </style>
    
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="/"><span class="navbar-brand mb-0 h1">Todo</span></a>
            <a href="/create"><span class="btn btn-primary">Create Todo</span></a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        @auth
            <h2>{{Auth::user()->name}}</h2>
        @endauth
    </h1>
    <form action="{{url('login/')}}" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="email" id="email" placeholder="example@gmail.com">
        <br>
        <label>Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Log in</button>
    </form>
</body>
</html>
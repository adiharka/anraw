<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&family=Source+Sans+Pro:wght@600&display=swap"
        rel="stylesheet">
</head>

<body>
    <div style="display: flex; justify-content: center;">
        <div class="container isi" style="max-width: 1000px;">
            <form method="POST" class="container-child" action="{{ route('login') }}">
                @csrf
                <h1>LOGIN</h1>
                <div class="form-group">
                    <label for="email">Username</label>
                    <input class="form-control" type="text" name="email" id="email" value="old('email')" placeholder="example@gmail.com" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="password" required autocomplete="current-password">
                </div>
                <div class="form-group primary-button">
                    <a href="{{ asset('home')}}"><button type="submit">Login</button></a>
                    {{-- <p>Belum punya akun? <a href="{{ route('register')}}">Register</a></p> --}}
                </div>
            </form>
            <div class="container-child illust">
                <img src="{{ asset('img/login.png')}}" alt="">
            </div>
        </div>
    </div>
</body>

</html>

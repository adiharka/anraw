<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <script src="{{ asset('script.js')}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        :root {
            --primary: #853eac;
            --dark: #4f4c9b;
            --gradient: radial-gradient(100% 2187.83% at 0% 50%, #f6adf9 0%, #916b9c 100%);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&family=Source+Sans+Pro:wght@600&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- <div style="display: flex; justify-content: center; align-items:center; min-height:100vh"> --}}
    <div id="main" style="display: flex; justify-content: center; align-items:center; min-height:100vh">
        <div class="isi" style="display:flex; max-width:400px; justify-content:center">
            <form method="POST" style="width: 350px; gap: 1rem; margin-top: 1rem" action="{{ route('login') }}">
                @csrf
                <div class="header">

                    <h1 id="header" style="text-align: center">LOGIN</h1>
                </div>
                @if(session('errors'))
                <div>
                    <div id='alert' class='normal'>
                        <div class="task-group">
                            <p style="margin: 0; text-align: center">Terjadi Error:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button id='tutup' type="button" class="close" color='remove' style="max-width: unset">
                                <span aria-hidden="true">Oke</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endif
                <div class="header">

                    <div class="form-group">
                        <label for="email">NISN/NIP</label>
                        <input class="form-control" type="text" name="email" id="email" :value="old('email')"
                            placeholder="19xxxx" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="password"
                            required autocomplete="current-password">
                    </div>
                    <div class="form-group primary-button">
                        <a href="{{ asset('home')}}"><button type="submit">Login</button></a>
                        {{-- <p>Belum punya akun? <a href="{{ route('register')}}">Register</a></p> --}}
                    </div>
                </div>
            </form>
            {{-- <div class="container-child illust">
                <img src="{{ asset('img/login.png')}}" alt="">
        </div> --}}
    </div>
    </div>
</body>

</html>

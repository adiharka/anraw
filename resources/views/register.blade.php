<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div style="display: flex; justify-content: center;">
    <div class="container isi" style="max-width: 1000px;">
        <form class="container-child">
            <h1>DAFTAR</h1>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Joko">
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" placeholder="1234XXXX">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <div class="form-double">
                    <select class="form-control" id="kelas">
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select class="form-control" id="kelass">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="no">No. Handphone</label>
                <input class="form-control" type="text" id="no" placeholder="08XXXXX">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" placeholder="password">
            </div>
            <div class="form-group">
                <label for="re-password">Re-Password</label>
                <input class="form-control" type="password" id="re-password" placeholder="re-password">
            </div>
            <div class="form-group primary-button">
                <button type="submit">Daftar</button>
                <p>Sudah punya akun? <a href="login.html">Login</a></p>
            </div>
        </form>
        <div class="container-child illust">
            <img src="img/register.png" alt="">
        </div>
    </div>
    </div>
</body>
</html>
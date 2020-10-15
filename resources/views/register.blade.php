<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body class="body">
    <div class="regis">
        <center>
            <form action="/register/prosesRegister" id="form" class="form" method="post">
            {{ csrf_field() }}
                <h2 id="tit" class="tit">Register</h2>
                <div class="inputr">
                    <div class="inputkanan">
                    <div class="box">
                        <label>Nama Lengkap</label>
                        <input id="namaLengkap" type="text" name="namaLengkap" placeholder="Nama" autocomplete="off" autofocus="" required="">
                    </div>
                    <div class="box">
                        <label>Alamat</label>
                        <textarea id="alamat" type="text" name="alamat" placeholder="masukan alamat" required="" autocomplete="off"></textarea>
                    </div>
                    <div class="box">
                        <label>No Telepon</label>
                        <input id="noTelepon" type="number" name="noTelepon" placeholder="08**********" autocomplete="off" required="">
                    </div>
                    </div>
                    <div class="garis"></div>
                    <div class="inputkiri">
                        <div class="box">
                            <label>Username</label>
                            <input id="Username" type="text" name="username" placeholder="Username" autocomplete="off" autofocus="" required="">
                        </div>
                        <div class="box">
                            <label>Password</label>
                            <input id="password" type="Password" name="password" placeholder="........." required="">
                            <a onclick="tampil()" href="#" class="a" id="tampil"><i class="fas fa-eye"></i></a>
                        </div>
                        <div class="box">
                            <input type="submit" id="submit" class="submitr"  name="" value="Register">
                        </div>
                    </div>
                </div>
                <p>Sudah punya akun ? <a href="login">Login</a></p>
            </form>
        </center>
    </div>
</body>
</html>
<script type="text/javascript" src="{{ asset('/js/js.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="module" src="{{ asset('/js/jquery.js') }}"></script>
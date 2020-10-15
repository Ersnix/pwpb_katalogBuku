<?php 
if (session()->has('status') == "gagal") {
    echo "<script>alert('username atau password salah!!')</script>";
    session()->forget('status');
}
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) 
 {   
    header("location:".session()->get('login'));
    exit();  
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

    <div class="body">
    <center>
    <form action="login/prosesLogin" id="form" class="form"  method="POST">
        {{ csrf_field() }}
        <h2 id="tit" class="tit">Login</h2>
        <div class="input">
            <div class="box">
                <label>Username</label>
                <input id="Username" type="text" name="username" placeholder="Username" autofocus="" required="" autocomplete="off">
            </div>
            <div class="box">
                <label>Password</label>
                <input id="password" type="Password" name="password" placeholder="........." required="" autocomplete="off">
                <a onclick="tampil()" href="#" class="b" id="tampil"><i class="fas fa-eye"></i></a>
            </div>
            <br>
            <div class="remember">
                <input type="checkbox" name="remember" value="remember">
                <label for="remember">Remember me</label>
            </div>
            <br>
            <div class="box">
                <input type="submit" id="submit" class="submit"  name="" value="SUBMIT">
            </div>
        </div>
        <p>Tidak punya akun ? <a href="register">Register</a></p>
    </form>
    </center>
    </div>
    </body>
</html>
<script type="text/javascript" src="{{ asset('/js/js.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="module" src="{{ asset('/js/jquery.js') }}"></script>
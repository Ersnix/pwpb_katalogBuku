<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            .welcome {
                background-color: ;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            }
            .welcomeh {
                background-color: ;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                filter: blur(10px); 
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .regis{
                display: none;
            }
            .regisv{
                display: flex;
                position: absolute;
                top: 20px;
                left: 20%;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }
            .input{
                display: flex;
            }
            .garis{
                height: 250px;
                margin:60px 30px; 
                border: 1px solid rgba(255,255,255,0.1);
            }
            .close a{
                position: absolute;
                text-decoration: none;
                top: 2px;
                right: 14px;
                font-size: 30px;
                color: #ff0047;
            }
        </style>
    </head>
    <div id="welcome" class="welcome">
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="">Login</a>|
                        <a href="#" onclick="regisv();">Register</a>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    HELLO, Welcome 
                    <div class="links">
                        <a href="">home</a>
                        <a href="">about</a>
                        <a href="">kontak</a>
                        <a href="">help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="regis" class="regis">

        <center>
            <form action="/register/prosesRegister" id="form" class="form" method="post">
                <div class="close"><a href="#" onclick="regis();">x</a></div>
            {{ csrf_field() }}
            <h2 id="tit" class="titb">Register</h2>
            <div class="input">
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
                    <input id="noTelepon" type="number" name="noTelepon" placeholder="08**********" autocomplete="off" autofocus="" required="">
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
                    <a onclick="tampil()" href="#" id="tampil"></a>
                    </div>
                    <div class="box">
                        <input type="submit" id="submit" class="submit1"  name="" value="Register">
                    </div>
                </div>
            </div>
            <p>Sudah punya akun ? <a href="/login">Login</a></p>
            </form>
        </center>
    </div>
</html>
<script type="text/javascript">
    function regisv() {
        document.getElementById('regis').className ='regisv';
        document.getElementById('welcome').className ='welcomeh';
    }
    function regis() {
        document.getElementById('regis').className ='regis';
        document.getElementById('welcome').className ='welcome';
    }
</script>



<?php
  if (session()->has('login') != 'admin') {
    header("location:../login");
    exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home </title>
</head>
<body class="background">
    <div class="section">
        <div class="header">
            <h1>BERANDA<a class="logout" href="logout" onclick="return confirm('yakin ingin logout?')">Log out</a></h1>
        </div>
        <div class="home_admin">Welcome " Admin "</div>
    </div>
</body> 
</html>


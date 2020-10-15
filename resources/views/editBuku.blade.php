<?php
  if (session()->has('login') != 'pemilik') {
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
<input type="checkbox" id="check">
  <label for="check">
    <i class="fa fa-navicon" id="open"></i>
    <i class="fa fa-close" id="close"></i>
  </label>
  <div class="sidebar">
    <header class="nama_header">
      <h1>Menu</h1>
    </header>
    <ul>
      <li><a href="/pemilik"><i class="fa fa-home"></i>Home </a> </li>
      <li><a href="#"><i class="fa fa-power-off"></i>About</a> </li>
    </ul>
    
  </div>
<body class="background">
    <div class="section">
        <div class="header">
            <h1>Tambah buku<a class="logout" href="logout" onclick="return confirm('yakin ingin logout?')">Log out</a></h1>
        </div>
        <form action="/pemilik/prosesEditBuku" enctype="multipart/form-data" method="POST">
             {{ csrf_field() }}
             <input type="hidden"  name="kodeBuku" value="{{ $buku->kode_buku }}">
            <label>nama buku</label>
            <input type="text" name="namaBuku" value="{{ $buku->nama_buku }}">
            <label>Harga buku</label>
            <input type="text" name="hargaBuku" value="{{ $buku->harga_buku }}">
            <label>Jumlah buku</label>
            <input type="text" name="jumlahBuku" value="{{ $buku->jumlah_stok }}">
            <label>upload sampul</label>
            <input type="file" name="sampulBuku">
            <input type="submit" class="submit1" name="submit">
        </form>
    </div>
</body> 
</html>


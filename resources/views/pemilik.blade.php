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
            <h1>BERANDA<a class="logout" href="logout" onclick="return confirm('yakin ingin logout?')">Log out</a></h1>
        </div>
        <a href="/pemilik/tambahBuku">+ Tambah</a>
        <table class="tbvBuku">
            <tr>
                <th>Kode Buku</th>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>jumlah tersisa</th>
                <th>opsi</th>
            </tr>
            <?php 
                foreach($buku as $b){
            ?> 
            <tr>
                <td>{{ $b->kode_buku }}</td>
                <td><img class="sampulBuku" src="{{ asset('/sampul_buku/'.$b->gambar_sampul) }}" width="150" height="220"></td>
                <td>{{ $b->nama_buku }}</td>
                <td>{{ $b->harga_buku }}</td>
                <td>{{ $b->jumlah_stok }}</td>
                <td>
                    <a href="pemilik/editbuku/{{ $b->kode_buku }}">Edit</a>
                    |
                    <a href="pemilik/deletebuku/{{ $b->kode_buku }}"" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body> 
</html>


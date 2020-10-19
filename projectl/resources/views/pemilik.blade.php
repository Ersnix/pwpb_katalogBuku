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
            <h1 class="judul_halaman_pemilik">Beranda Pemilik Toko<a class="logout" href="logout" onclick="return confirm('yakin ingin logout?')">Log out</a></h1>
        </div>
        
        <div class="tbvBuku">
            <h1>Daftar Buku</h1>
            <a href="pemilik/tambahBuku">+ Tambah</a>
        <div class="daftarBuku">
            <?php 
                foreach($buku as $b){
            ?> 
            <div  class="boxBuku">
                <div class="menutamb">
                    <div class="dic">
                        <div class="stardic"></div>
                        <div class="txt">OFF 30%</div>    
                        <div class="enddic"></div>
                    </div>
                    <div class="rec">
                        <div class="starrec"></div>
                        <div class="txt2">Recomendation</div>
                        <div class="endrec"></div>    
                    </div>
                </div>
                <center><h3>{{ $b->nama_buku }}</h3></center>
                <div class="optionMenu">
                    <i class="fa fa-navicon" id="open"></i>
                </div>
                <div class="menu"></div>
                <div class="flex">
                    <img class="sampulBuku" src="{{ asset('/sampul_buku/'.$b->gambar_sampul) }}" width="200" height="200">
                    <div class="data">
                        <div><span>Harga Buku  :</span> Rp.{{ $b->harga_buku }}</div>
                        <div><span>Jumlah Stok :</span> {{ $b->jumlah_stok }}</div>
                        <div class="desk"><span>Deskripsi :</span>{{$b->deskripsi_buku}}
                        </div>
                        
                    </div>
                </div>
                <div class="option">
                    <a href="pemilik/editbuku/{{ $b->kode_buku }}">Edit</a>
                    <a class="deletebuku" href="pemilik/deletebuku/{{ $b->kode_buku }}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                </div>
            </div>
            
            <?php } ?>

            
        </div>
            <div class="page">
                Halaman : {{ $buku->currentPage() }} <br/>
                Jumlah Data : {{ $buku->total() }} <br/>
                Data Per Halaman : {{ $buku->perPage() }} <br/>
                <div class="linkpage">{{ $buku->links() }}</div>
            </div>
        </div>

    </div>
</body> 
</html>


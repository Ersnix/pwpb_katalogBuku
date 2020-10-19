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
            <h1>Edit buku<a class="logout" href="/logout" onclick="return confirm('yakin ingin logout?')">Log out</a></h1>
        </div>
        <form class="formadd" action="/pemilik/prosesEditBuku" enctype="multipart/form-data" method="POST">
          <input type="hidden" name="kodeBuku" value="{{$buku->kode_buku}}">
          <h1>Form Edit</h1>
             {{ csrf_field() }}
             <div class="inputadd">
              <div class="addkiri">
                <div id="imgPreview"><img src="{{ asset('/sampul_buku/'.$buku->gambar_sampul) }}" height="150px" width="150px"></div>
                <input onchange="return imgPreview()" type="file" name="sampulBuku" id="sampulBuku" accept="image/*">
                <label class="gbr" for="sampulBuku">Pilih Gambar</label>
              </div>
              <div class="addkanan">
              <div class="inpt">
                <label>nama buku</label>
                <input type="text" name="namaBuku" value="{{ $buku->nama_buku}}">
              </div>
              <div class="inpt">
                <label>Harga buku</label>
                <input type="number" name="hargaBuku" value="{{ $buku->harga_buku}}">
              </div>
              <div class="inpt">
                <label>Jumlah buku</label>
                <input type="number" name="jumlahBuku" value="{{ $buku->jumlah_stok}}">
              </div>
              <div class="inpt">
                <label>Deskripsi</label>
                <textarea name="deskripsi" >{{$buku->deskripsi_buku}}</textarea>
              </div>
            </div>
            </div>
            
            <input type="submit" class="submitadd" name="submit">
        </form>
    </div>
</body> 
</html>
<script type="text/javascript">
  function imgPreview(){
    var fileInput = document.getElementById('sampulBuku');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imgPreview').innerHTML = '<img src="'+e.target.result+'" width="150px" height="150px"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>


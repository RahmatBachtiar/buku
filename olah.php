<!doctype html>
<?php 
include "koneksi.php";
$id="";
$judul = "";
$pengarang = "";
$penerbit = "";
$kategori = "";
//$gambar = $data['gambar'];
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $query = "SELECT * FROM tb_buku WHERE id='$id'";
    $sql = mysqli_query($konek,$query);
    $data = mysqli_fetch_array($sql);
    $judul = $data['judul'];
    $pengarang = $data['pengarang'];
    $penerbit = $data['penerbit'];
    $kategori = $data['kategori'];
    $gambar = $data['gambar'];
}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>Daftar Buku</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Data Buku</a>
        
           </div>
      </nav>

      <figure class="text-center mt-5" >
        <blockquote class="blockquote">
          <p>Daftar Buku yang Tersedia</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Kelola data buku</cite>
        </figcaption>
      </figure>

      <Form action="proses.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>"
            placeholder="Masukan Judul Buku">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $pengarang; ?>"
            placeholder="Masukan Nama Pengarang">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $penerbit; ?>"
            placeholder="Masukan Penerbit">
            </div>
        </div>
      
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
            <select name="kategori" id="kategori" class="form-control">
                <option value="Umum" <?php if($kategori=="Umum") echo "selected"; ?>>Umum</option>
                <option value="Pelajaran" <?php if($kategori=="Pelajaran") echo "selected"; ?>>Pelajaran</option>
            </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" id="gambar" name="gambar" >
            </div>
        </div>
            
        <div class="mb-3 row">
            <?php
                if(isset($_GET['edit'])){
                    echo "<button type='submit' class='btn btn-primary' name='btnProses' value='edit'>Simpan Perubahan</button>";
                }else{
                    echo "<button type='submit' class='btn btn-primary' name='btnProses' value='tambah'>Tambah Data</button>";
                }
            
            ?>
            
        </div>
        </Form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
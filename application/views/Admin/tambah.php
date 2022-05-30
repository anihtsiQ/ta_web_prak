<?php
/*
session_start();
if($_SESSION['status'] !== 'login') {
  header('location: ../index.php');
}
require "navbar.php";
require_once "../config.php";

    if(isset($_POST['tambah_br'])){
        $nama_br = $_POST['nama_br'];
        $stok_br = $_POST['stok_br'];
        $kategori = $_POST['kategori_br'];
        $satuan = $_POST['satuan'];

        tambah_br($nama_br,$stok_br,$kategori, $satuan);
    }
    if(isset($_POST['update_stok'])){
        $nama_br = $_POST['nama_br'];
        $stok_br = $_POST['stok_br'];

        update_stok($nama_br,$stok_br);
    }
*/
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!--CSS-->
        <link rel="stylesheet" href="asset//css/style.css">
        <title>Warung Mama Farhan</title>
    </head>
    <body>

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h1>Tambah Barang Baru</h1>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">
                                        Nama Barang
                                    </label>
                                    <input type="text" name="nama_br" class="form-control" placeholder="Nama Barang" required autocomplete="OFF">
                                </div>    
                                <div class="form-group">
                                    <label>
                                        Kategori Barang
                                    </label>
                                    <select name="kategori_br" class="form-select" aria-label="Disabled select example">
                                    <?php  
                                        $query = mysqli_query($conn, "SELECT * FROM kategori order by nama_kategori asc");
                                        while($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?=$data['id_kategori']?>">
                                            <?=$data['nama_kategori']?>
                                        </option>
                                    <?php } ?>
                                    </select>
                                
                                    <div class="form-group">
                                        <label>
                                            Stok
                                        </label>
                                        <input type="number" name="stok_br" class="form-control" placeholder="Jumlah">
                                    </div>
                                    <div>
                                        <input type="text" name="satuan" class="form-control" placeholder="satuan">
                                    </div>
                                    <button type="submit" class="btn btn-success mt-3" name="tambah_br">
                                        Tambah Barang
                                    </button>
                                    <button type="reset" class="btn btn-danger mt-3" >
                                        reset
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
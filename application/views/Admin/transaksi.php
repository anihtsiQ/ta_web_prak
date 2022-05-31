<?php
/*
session_start();
if($_SESSION['status'] !== 'login') {
  header('location: ../index.php');
}

require "navbar.php";
require_once "../config.php";
    

    if(isset($_POST['proses_trans'])){
        $nama_buy = $_POST["nama_buy"];
        $nama_br = $_POST["nama_br"];
        $jumlah_br = $_POST["jumlah_br"];
        
        transaksi($nama_buy,$nama_br,$jumlah_br);
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
        <link rel="stylesheet" href="asset//css/login.css">
        <title>Warung Mama Farhan</title>
    </head>
    <body>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-evenly">
                                <div class="col-7">
                                    <h1>Transaksi</h1>
                                </div>
                                <div class="col-3">
                                <a href="penjualan.php" class="btn btn-lg">Tabel Penjualan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">
                                        Nama Pembeli
                                    </label>
                                    <input type="text" name="nama_buy" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="">Barang</label>
                                    <select name="nama_br" class="form-select" aria-label="Disabled select example">
                                        <?php  
                                            //$query = mysqli_query($conn, "SELECT * FROM barang ORDER BY nama_barang ASC");
                                            //while($data = mysqli_fetch_array($query)) {
                                            //    var_dump($data);
                                        ?>
                                            <option value="<?=$data['id_barang']?>">
                                                <?=$data['nama_barang']?>
                                            </option>
                                        <?php //} ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="number" name="jumlah_br" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success mt-3" name="proses_trans">
                                        Proses Pembelian
                                    </button>
                                    <button type="reset" class="btn btn-danger mt-3" >
                                        reset
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>


        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
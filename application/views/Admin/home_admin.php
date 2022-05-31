<?php
/*    session_start();
    if($_SESSION['status'] !== 'login') {
      header('location: ../index.php');
    }
    require_once "navbar.php";
    require_once "../config.php";

    if(isset($_POST['update_stok'])){
        $nama_br = $_POST['nama_br'];
        $stok_br = $_POST['stok_br'];

        update_stok($nama_br,$stok_br);
    }

    if(isset($_POST['caribr'])){
        
        if($_POST['keyword'] == "") {
            header('location: index.php');
          }else{
            $key = $_POST['keyword'];
          }
    }

    $tampil = tampil("CALL stok_barang()");

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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                Data Stok Barang 
                            </div>
                            <div class="col-6">
                                <form action="" method="POST">
                                    <div class="form-group">
                                    <input type="text" name="keyword" autocomplete="OFF" size="50">
                                    <button type="submit" class="btn btn-success" name="caribr">cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Satuan</th>
                                <th class="text-center">Update Stok</th>
                            </tr>
                                <?php
                                    foreach ($result as $barang) :
                                ?>
                            <tr>
                                <td><?=$barang["kategori"]?></td>
                                <td><?=$barang["barang"]?></td>
                                <td><?=$barang["stok"]?></td>
                                <td><?=$barang["satuan"]?></td>
                                <td>
                                <form action="<?=base_url('Admin/update_br') ?>" method="POST">                                    
                                    <input type="hidden" name="id_br" value="<?=$barang["id_barang"]?>">
                                    
                                    <input type="number" name="stok_br" class="form-control" required>
                                </td>    
                                <td>
                                    <button type="submit" class="btn btn-success" name="update_stok">
                                            Update Stok
                                    </button>
                                </form>
                                </td>
                            </tr>
                                <?php  
                                    endforeach; 
                                ?>
                        </table>
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
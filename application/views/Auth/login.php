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
        <link rel="stylesheet" href="asset/css/login.css">
        <title>Warung Mama Farhan</title>
    </head>
    <body>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-3">
                <div class="ct card">
                    <div class="card-header">
                        LOGIN
                    </div>
                    <?= $this->session->flashdata('message');?>
                    <div class="card-body">
                        <form id="contact-form" action="<?= base_url('auth');?>" method="post" role="form">
                            <div class="form-group">
                                <label> 
                                    Username
                                </label>
                                <input type="text" name="username" class="form-control" placeholder="username" autofocus autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label> 
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control" placeholder="password" style="fa fa-eye">
                            </div>    
                                <button type="submit" class="btn btn-success mt-3" value="login" name="login">
                                    Login
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
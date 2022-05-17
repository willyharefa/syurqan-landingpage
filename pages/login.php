<?php 
    require '../php/koneksi.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
    <title>Form Login</title>
</head>
<body>
    <div class="container-fluid">
        <?php 
            include 'navbar.php';
        ?>
        <div class="container">
            <div class="col-sm-12 col-md-4 mx-auto wrapper-login">
                <form action="../php/autentikasi.php" method="post">
                    <div class="row g-0">
                        
                            <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "gagal"){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        Login anda gagal ! 
                                    </div>
                                <?php 
                                }
                                elseif($_GET['pesan'] == "belum_login"){ ?>
                                    <div class="alert alert-info" role="alert">
                                        Login terlebih dahulu ! 
                                    </div>
                                <?php 
                                }
                                elseif ($_GET['pesan'] == "sukses"){ ?>
                                    <div class="alert alert-success" role="alert">
                                        Login anda berhasil ! 
                                    </div>
                                <?php }
                            }?>
                    
                    </div>
                    <div class="row g-0 text-center mb-4">
                        <h4>Login</h4>
                        <p>Silahkan login terlebih dahulu</p>
                    </div>
                    <div class="row g-0">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username anda" required autocomplete="off" spellcheck="false">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password anda" required>
                        </div>
                    </div>
                    <div class="row g-0">
                        <button type="submit" class="btn btn-primary py-3 mb-3">Masuk</button>
                        <p class="text-center">Belum punya akun ? Registrasi <a href="">disini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
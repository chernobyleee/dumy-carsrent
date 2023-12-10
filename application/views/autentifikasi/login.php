<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarsRent</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- BOX ICON -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- FONT AWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="login">
    <section id="form-box" class="mx-4">
        <div class="container-fluid">
            <div class="section-title mb-3">
                <h2 class="fw-bold text-center">LOGIN FORM</h2>
            </div>
            <div class="row align-items-center">
                <div class="d-none d-md-block col-md-6">
                    <img src="<?= base_url('assets/img/carsrent.png') ?>" class="img-fluid img-login" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <form class="user" method="post" action="<?= base_url('autentifikasi/login'); ?>">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
                        </div>
                        <div class="mb-3">
                            <label fclass="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                        </div>
                        <div class="mb-3">
                            <button class="btn-login">Login</button>
                            <a class="btn-cancel mt-1" href="<?= base_url('home') ?> ">Back To Home</a>
                        </div>
                        <div class="mb-3 text-center">
                            <a href="#" class="link"><small>Forgot Password</small></a>
                            <br>
                            <a href="<?= base_url('autentifikasi/register') ?>" class="link"><small>Don't have an account? Register</small></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/auth.js') ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
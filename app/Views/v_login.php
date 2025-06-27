<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Laporan Toilet | Login</title>
    <link rel="stylesheet" href="templates/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="templates/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode login-page">
    <div class="login-box">
        <div class="login-logo mb-3">
            <b>Sistem Laporan Toilet</b>
        </div>

        <div class="card card-outline card-primary">
            <div class="card-body">

                <form action="<?= site_url('login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="templates/plugins/jquery/jquery.min.js"></script>
    <script src="templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="templates/dist/js/adminlte.min.js"></script>
</body>

</html>

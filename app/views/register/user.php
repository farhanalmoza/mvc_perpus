<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | User</title>

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
    <!-- buat tampilan login full -->
    <div class="container">
        <div class="mt-5 row justify-content-center">
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title align-item-center">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?= BASEURL; ?>/auth/regis_user" method="POST">
                            <!-- Nama -->
                            <div class="form-outline mb-4">
                                <input type="text" id="nama" name="nama" class="form-control" />
                                <label class="form-label" for="nama">Nama</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <!-- Password confirm -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password_confirm" name="password_confirm" class="form-control" />
                                <label class="form-label" for="password_confirm">Password</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

                            <!-- Login buttons -->
                            <div class="text-center">
                                <p>Sudah punya akun? <a href="<?= BASEURL; ?>/login/user">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap -->
    <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
</body>
</html>
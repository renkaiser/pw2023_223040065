<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container form-login">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Login</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="password">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" autocomplete="off" require>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" autocomplete="off" require>
                    </div>
                    <br>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    <br><br>
                    <a href="register.php">Belum punya akun?</a>
                </form>
                            
            <?php 
            if(isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$email."' AND password = '".($password)."' ");
                if(mysqli_num_rows($cek) > 0 ) {
                    $_SESSION['login'] = true;
                    echo '<script>alert("Berhasil Login");</script>';
                    echo '<script>window.location = "index.php";</script>';
                } else {
                    echo '<script>alert("Login Gagal");</script>';
                }
            }
            ?>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
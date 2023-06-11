<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container form-register">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Daftar</h2>
                <form action="" method="post">
                <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="nama" class="form-control" id="nama" name="nama" placeholder="Enter name" autocomplete="off" require>
                    </div>
                    <div class="form-group">
                        <label for="password">Username:</label>
                        <input type="username" class="form-control" id="username" name="username" placeholder="Enter username" autocomplete="off" require>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <br>
                        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                    <br><br>
                    <a href="login.php">Sudah punya akun?</a>
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
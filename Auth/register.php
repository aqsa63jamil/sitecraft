<?php
require_once "controllerUserData.php";
// include('../Connection/connection.php');
// session_start();
// if (isset($_SESSION['logged_in']) && isset($_SESSION['logged_in']) == true) {
//     header("location: ../Create_Store/website_buildup.php");
// }
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $hashed_password = password_hash($password, PASSWORD_BCRYPT);

//     $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

//     if ($conn->query($sql) === TRUE) {
//         header("Location: login.php");
//         exit;
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="../Styles/auth.css">
</head>
<body>

    <div class="container-fluid d-flex flex-column full-height">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SiteCraft</a>
            </div>
        </nav>
        <div class="w-100 p-lg-5 container mx-auto my-auto">
            <div class="text-center mb-4 link login-link">
                <h1>Sign Up</h1>
                <p>Already have an account? <a href="login.php">Login</a></p>
                <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
            </div>
            <div class="row d-flex align-items-center justify-content-center px-lg-5">
                <div class="col-lg-6 col-12 p-4 border-divider px-lg-5 position-relative">
                    <div class="column-divider position-absolute d-none d-lg-flex"><p>or</p></div>
                    <form action="register.php" method="POST" autocomplete="">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control border-0 border-bottom no-outline" id="username" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                            <label for="username">Username</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control border-0 border-bottom no-outline" id="email" name="email" placeholder="name@example.com" required value="<?php echo $email ?>">
                            <label for="email">Email address</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control border-0 border-bottom no-outline" id="password" name="password" placeholder="@!20iandnjaskdn/^*^" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control border-0 border-bottom no-outline" id="cpassword" name="cpassword" placeholder="@!20iandnjaskdn/^*^" required>
                            <label for="cpassword">Confirm Password</label>
                            <div class="invalid-feedback">Passwords do not match.</div>
                            <div class="valid-feedback">Passwords match.</div>
                        </div>
                        <button type="submit" class="btn d-none d-lg-block text-primary rounded-pill px-3 fw-bold border border-primary mt-5" name="signup" value="Signup">Sign Up with Email</button>
                        <div class="container-sm d-lg-none d-flex align-items-center justify-content-center gap-3 mt-5">
                            <button class="btn btn-primary rounded-pill px-3 fw-bold">Sign Up</button>
                            <span>OR</span>
                            <a href="google-auth.php" class="google-sign-in-button-mobile p-2"></a>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-12 p-4 px-lg-5 d-none d-lg-flex align-items-center justify-content-center">
                    <button type="button" class="google-sign-in-button" >
                        Sign in with Google
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('cpassword');

        confirmPasswordInput.addEventListener('input', function() {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.setCustomValidity('');
            } else {
                confirmPasswordInput.setCustomValidity('Passwords do not match.');
            }
        });

        passwordInput.addEventListener('input', function() {
            confirmPasswordInput.setCustomValidity('');
        });

        passwordInput.addEventListener('blur', function() {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.setCustomValidity('');
            }
        });

        confirmPasswordInput.addEventListener('blur', function() {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.setCustomValidity('');
            }
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">

    <title>Login Form</title>
</head>
<body>

<?php
        require_once("datavalidation.php");
    ?>

    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"];  ?>" method="post">
            <h1>Login Form</h1>
            <div class="input-box">
                <label for="mail">Your Email</label>
                <input required type="email" name="email" id="email" />
            </div>
            <div class="input-box">
                <label for="password">Your Password</label>
                <input required type="password" name="password" id="password" />
                <i id="eye"  title="Show Password" class="fas fa-eye-slash " style="color:#00000080;"></i>
            </div>

            <div id="btn-div"  class="btn">
                <button id="btn" name="login">Login</button>
            </div>
            <?php
                if($result !== ""){
                    echo $result;
                }
            ?>

            <p class="login-link">
                Don't have account? <a href="./signup.php">Register Here</a>
            </p>
        </form>
    </div>





    <!-- <script src="./jquery-3.7.1.min.js"></script> -->
    <script src="./script.js"></script>
    <script>
        login();
    </script>
</body>
</html>
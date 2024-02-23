<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">

    <link rel="stylesheet" href="./login.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">

    <title>Signup Form</title>

</head>
<body>
<?php
        require_once("datavalidation.php");
    ?>


    <div class="header">
        <p id="toggle-mode"><span>Dark Mode</span></p>
        <div>
            <input type="checkbox" name="" id="check">
            <label class="button" for="check">
                <i class="fas fa-moon" style="background-color:transparent;"></i>
            </label>
        </div>
    </div>

    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"];  ?>" method="post">
            <h1>Signup Form</h1>
            <div class="input-box">
                <label for="name">Your Name</label>
                <input required type="text" name="name" id="name" />
            </div>
            <div class="input-box">
                <label for="mail">Your Email</label>
                <input required type="email" name="email" id="email" />
            </div>
            <div class="input-box">
                <label for="password">Your Password</label>
                <input required type="password" name="password" id="password" />
                <i id="eye" title="Show Password" class="fas fa-eye-slash " style="color:#00000080;"></i>
            </div>
            <div class="input-box">
                <label for="c_pass">Confirm Password</label>
                <input required type="password" name="c_password" id="c_pass" />
                <i id="check-box" label="Password Not Matched!" class="fas fa-circle-xmark" style="color:red; pointer-events:none; opacity:0;"></i>
            </div>

            <div id="btn-div" class="btn">
                <button id="btn" name="register">Register</button>
            </div>
            
            <?php
                if($result !== ""){
                    echo $result;
                }
            ?>
            <p class="login-link">
                Already have account? <a href="./login.php">Login Here</a>
            </p>
        </form>
    </div>

    <div class="footer">
        <p><i class="fa-regular fa-copyright"></i> All rights reserved</p>
    </div>





    <script src="./jquery-3.7.1.min.js"></script>
    <script src="./signup-script.js"></script>

    <script>
            var btn = document.getElementById("btn");
    var btnDiv = document.getElementById("btn-div");

                btn.addEventListener("mouseover", ()=>{
                    if(confirmPass.value === pass.value){
                        btn.style.right = 0;
                    }else{
                        if(btn.style.right != "0px"){
                            btn.style.right = "0px";
                        }else if(btn.style.right == "0px"){
                            btn.style.right = "50%";
                        }else if(btn.style.right == "50%" ){
                            btn.style.right = "80%";

                        }
                    }
                });


                confirmPass.addEventListener("keyup", ()=>{
        if(confirmPass.value === ""){

            check_mark.style.opacity = 0;

            
        }else{

            check_mark.style.opacity = 1;

            if(confirmPass.value === pass.value){

                check_mark.classList.add("fa-circle-check");

                check_mark.style.color = "green";

                check_mark.classList.remove("fa-circle-xmark");

                btn.style.right = "0px";

            }else{
                check_mark.classList.remove("fa-circle-check");

                check_mark.classList.add("fa-circle-xmark");
                
                check_mark.style.color = "red";
                
                
                
            }
        }
    });
    </script>
</body>
</html>
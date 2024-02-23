<?php
        $connection = mysqli_connect("localhost", "root", "", "studentdata");
        $result = "";
        $userName = "";

        $sqlQuery = "SELECT * FROM admissiondata";
        $sqlResult = mysqli_query($connection, $sqlQuery);

        if(isset($_POST['update-data'])){
            $valueOne = $_POST['option-select'];
            $valueTwo = $_POST['update-item-2'];
            $replaceValue = $_POST['update-item-3'];

            $updateQuery = "UPDATE `admissiondata` SET `$valueOne` = '$valueTwo' WHERE id='$replaceValue'";
            $updateResult = mysqli_query($connection, $updateQuery);
            header("location: dashboard.php");
            $result = "Success!";
        }
        
        if(isset($_POST["insert-data"])){
            $studentName = $_POST["insert_name"];
            $studentEmail = $_POST["insert_email"];
            $studentAdmissionDate = $_POST["insert_date"];

            $verifyingQuery = "SELECT * FROM `admissiondata`";
            $verifyResult = mysqli_query($connection, $verifyingQuery);
            $databaseMail = "";
            if(mysqli_num_rows($sqlResult) > 0){
                while($row = mysqli_fetch_assoc($verifyResult)){
                    $databaseMail = $row["email"];
                }
            }
            if($studentEmail != $databaseMail){
                $insertQuery = "INSERT INTO `admissiondata`(`name`, `email`, `admissionDate`) VALUES ('$studentName','$studentEmail','$studentAdmissionDate')";

                $updateResult = mysqli_query($connection, $insertQuery);
                $result = "Inserted";

                header("location: dashboard.php");
            }else{
                $result = "Email exist";
            }
        }

        if(isset($_POST['register'])){
            $adminName = $_POST['name'];
            $adminEmail = $_POST['email'];
            $adminPass = $_POST['password'];
            $confirmPass = $_POST['c_password'];

            if($adminPass == $confirmPass){
                $hashPass = password_hash($adminPass, PASSWORD_DEFAULT);
                $registerQuery = "INSERT INTO `administrationdetals`(`name`, `email`, `pass`) VALUES ('$adminName','$adminEmail','$hashPass')";
                $registerResult = mysqli_query($connection, $registerQuery);

                if($registerResult){
                    header("location: login.php");
                }
            }else{
                $result = "Password does not match!";
            }
        }

        if(isset($_POST['login'])){
            $userEmail = $_POST['email'];
            $userPass = $_POST['password'];

            $confirmationQuery = "SELECT * FROM `administrationdetals` WHERE email='$userEmail'";
            $confirmationResult = mysqli_query($connection, $confirmationQuery);

            
            if(mysqli_num_rows($confirmationResult) > 0){
                $row = mysqli_fetch_assoc($confirmationResult);
                $userName = $row["name"];

                $hashedPassword = $row["pass"];
                
                if(password_verify($userPass, $hashedPassword)){
                    session_start();
                    $_SESSION["name"] = $userName;

                    header("location: dashboard.php");
                }else{
                    $result = "<p>Password Not Matched";
                }
            }else{
                $result = "<p>User Not Found</p>";
            }
        }

        if(isset($_POST['logout'])){
            session_start();
            session_unset();
            session_destroy();

            header("location: index.php");
        }
        
        
    ?>
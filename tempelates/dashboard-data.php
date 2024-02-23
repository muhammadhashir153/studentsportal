<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <?php
        require_once("datavalidation.php");
    ?>

    
    
        <?php
            if($result !== ""){
                echo "  <div id='result'>
                            <h3>
                                $result
                            </h3>
                        </div>";
            }
        ?>
    
    <?php 
        require_once("./tempelates/session.php");
    ?>
    <!--Header-->
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <header>
            <div class="search-box">
                <input type="text" name="search-box" id="search" placeholder="Search Students">
                <button name="search">Search</button>
            </div>
            <div class="detail-btns">
                <div class="btn">
                    <button type="button" id="insert">Insert Data</button>
                </div>
            </div>
        </header>
    </form>

    <h1>Student Portal</h1>

    <div id="grid">
        <table>
            <tr id='heading'>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Admission Date</td>
                <td></td>
            </tr>
            <tbody id='table'>
                
                <?php
                    require_once("./tempelates/table.php");
                ?>
                
            </tbody>
        </table>

    </div>

    
    <div id="update-data">
        <button id="update-close"><i class="fa-solid fa-xmark"></i></button>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <label for="update-item-1">Select Data e.g. name or email</label>
            <select name="option-select" id="update-item-1">
                <option value="-1">Select What you want to Update</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
            </select>

            <label for="update-item-2">Update Data</label>
            <input type="text" name="update-item-2" id="update-item-2" placeholder="Insert Values">

            <label for='update-item-3'>Update Data</label>
            <input type='text' readonly name='update-item-3' id='update-item-3' placeholder='Update Data'>

            <button name="update-data">Update</button>
            
        </form>
    </div>

    <div id="insert-data">
        <button id="insert-close"><i class="fa-solid fa-xmark"></i></button>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <label for="insert_name">Student Name</label>
            <input type="text" name="insert_name" id="insert_name" placeholder="Enter Student Name">

            <label for="insert_email">Studnet Email</label>
            <input type="text" name="insert_email" id="insert_email" placeholder="Enter Student Email">

            <label for="insert_date">Admission Date</label>
            <input type="date" name="insert_date" id="insert_date">

            <button name="insert-data">Insert</button>
            
        </form>
    </div>




    <script src="script.js"></script>
    <script>
        dashboard();
    </script>

</body>
</html>
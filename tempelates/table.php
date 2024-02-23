<?php
$studentsData = [];
    if(mysqli_num_rows($sqlResult) > 0){
        while($row = mysqli_fetch_assoc($sqlResult)){
            $name = $row['name'];
            $id = $row['id'];
            $email = $row['email'];
            $admissionDate = $row['admissionDate'];
            echo "

                    <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$admissionDate</td>
                        <td>
                            <button class='update' data-id='$id'>Update</button>

                            <form id='deleteform-$id' onsubmit='confirmBox(event, $id)' action='"  . $_SERVER['PHP_SELF']. "' method='post'>
                                <input type='hidden' name='deleteId'    value='$id'>
                                <button class='delete'><i class='fa-solid fa-trash-can'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
            ";

            if(isset($_POST["deleteId"])){
                $deleteId= $_POST['deleteId'];
                $deletQuery = "DELETE FROM `admissiondata` WHERE id='$deleteId' ";

                $deleteResult = mysqli_query($connection, $deletQuery);

                header("location: dashboard.php");
            }

            $studentsData[] = $row;

        }
    }

?>
<script>
    const studentData = <?php echo json_encode($studentsData); ?>
</script>
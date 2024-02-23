<?php
    //  session_start();
     if(isset($_SESSION["name"])){
        $userDisplayName = $_SESSION["name"];
         echo "
            <div id='user-data'>
                <h3>Welcome, $userDisplayName!</h3>
                <form action=' ".$_SERVER['PHP_SELF'] . "' method='post'>
                    <button name='logout'>Logout</button>
                </form>
            </div>
         ";
     }

?>
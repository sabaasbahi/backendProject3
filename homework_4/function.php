<?php

include "connect.php";

function display_data(){
    
    global $conn;

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn,$sql);
    return $result;
}

?>
<?php
    $connect = mysqli_connect("localhost", "root", "", "db");

    $query = mysqli_query($connect, "DELETE * FROM 'users' WHERE 'id' = '1');
?>

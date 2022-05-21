<?php
    include "database.php";
    $id = $_REQUEST['id'];
    mysqli_query($db, "delete from kota where id = '$id'");
    header("location:dashboard.php");
?>
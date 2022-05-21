<?php
    include "database.php";
    $id = $_POST['id'];
    $kota = $_POST['kota'];
    $code_area = $_POST['code_area'];
    mysqli_query($db, "insert into kota values('$id', '$kota', '$code_area')");
    header("location:dashboard.php");
?>
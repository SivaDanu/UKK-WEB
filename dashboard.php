<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Nama Kota Di Jawa Timur</title>
</head>
<body>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Masukkan Nama Kota</h3>
                </div>
                    <div class="modal-body">
                        <form action="submit.php" method="POST">
                            <div class="form-group">
                                Nama Kota : 
                                <input type="text" name="kota" class="form-control">
                            </div>
                            <div class="form-group">
                                Kode Area : 
                                <input type="text" name="code_area" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>    
            </div>            
        </div>
    </div>

    <br>

    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No : </th>
                <th>Nama : </th>
                <th>Kode Area : </th>
                <th>Aksi : </th>
            </tr>

            <?php
                include "database.php";
                $nomor = 1;
                $data = mysqli_query($db, "select * from kota");
                while ($isi=mysqli_fetch_array($data))
                { ?>
                    <tr>
                        <td><?php echo $nomor++ ?></td>
                        <td><?php echo $isi['kota']; ?></td>
                        <td><?php echo $isi['code_area']; ?></td>
                        <td>
                            <a href = "delete.php?id=<?php echo $isi['id']; ?>">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>
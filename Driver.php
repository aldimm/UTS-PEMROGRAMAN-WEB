<?php
    include 'Connect.php';
    $dataDriver = "SELECT * FROM driver;";
    $sql = mysqli_query($connec, $dataDriver);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="FITUR.CSS">
</head>
<body>
    <h1> DATA DRIVER</h1>
    <br>
    <a href="AddDriver.php" class="button">Tambah Driver</a>
    <table border = '1'>
        <thead>
            <tr>
                <th>ID Driver</th>
                <th>Nama</th>
                <th>No Sim</th>
                <th>Alamat</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($result = mysqli_fetch_array($sql))
                {
            ?>
            <tr>
                <td><?php echo $result['id_driver'];?></td>
                <td><?php echo $result['nama'];?></td>
                <td><?php echo $result['no_sim'];?></td>
                <td><?php echo $result['alamat'];?></td>
                <td>
                    <a href="<?php echo "UpdateDriver.php?id=".$result['id_driver'];?>">EDIT</a>
                    <a href="<?php echo "DeleteDriver.php?id=".$result['id_driver'];?>">HAPUS</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
    include 'Connect.php';
    $dataKondektur = "SELECT * FROM kondektur;";
    $sql = mysqli_query($connec, $dataKondektur);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="FITUR.css">
</head>
<body>
    <h1> DATA KONDEKTUR</h1>
    <br>
    <a href="AddKondektur.php" class="button">Tambah Kondektur</a>
    <table border = '1'>
        <thead>
            <tr>
                <th>ID Kondektur</th>
                <th>Nama</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($result = mysqli_fetch_assoc($sql))
                {
            ?>
            <tr>
                <td><?php echo $result['id_kondektur'];?></td>
                <td><?php echo $result['nama'];?></td>
                <td>
                    <a href="<?php echo "UpdateKondektur.php?id=".$result['id_kondektur'];?>">EDIT</a>
                    <a href="<?php echo "DeleteKondektur.php?id=".$result['id_kondektur'];?>">HAPUS</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>
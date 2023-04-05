<?php
    include 'Connect.php';
    $dataTrans = "SELECT * FROM trans_upn;";
    $sql = mysqli_query($connec, $dataTrans);
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
    <h1> DATA TRANS UPN</h1><br>
    <a href="AddTransUPN.php" class="button">
        Tambah Data
    </a>
    
    <table border = '1'>
        <thead>
            <tr>
                <th>ID TRANS UPN</th>
                <th>ID Kondektur</th>
                <th>ID Bus</th>
                <th>ID Driver</th>
                <th>Jumlah KM</th>
                <th>Tanggal</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($result = mysqli_fetch_assoc($sql))
                {
            ?>
            <tr>
                <td><?php echo $result['id_trans_upn'];?></td>
                <td><?php echo $result['id_kondektur'];?></td>
                <td><?php echo $result['id_bus'];?></td>
                <td><?php echo $result['id_driver'];?></td>
                <td><?php echo $result['jumlah_km'];?></td>
                <td><?php echo $result['tanggal'];?></td>
                <td>
                    <a href="<?php echo "UpdateTransUPN.php?id_trans_upn=".$result['id_trans_upn']; ?>">Update</a>
                        &nbsp;&nbsp;
                    <a href="<?php echo "DeleteTransUPN.php?id_trans_upn=".$result['id_trans_upn']; ?>"> Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
    include "Connect.php";

   
    if ($_SERVER['REQUEST_METHOD'] === 'GET') 
    {
        if (isset($_GET['id_trans_upn'])) 
        {
            $idT = $_GET['id_trans_upn'];
            $query = "SELECT * FROM Trans_upn WHERE id_trans_upn = $idT";

            $result = mysqli_query($connec, $query);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $IDT = $_POST['id_trans_upn'];
        $IDK = $_POST['id_kondektur'];
        $IDB = $_POST['id_bus'];
        $IDD = $_POST['id_driver'];
        $JK = $_POST['jumlah_km'];
        $TGL = $_POST['tanggal'];

        $queryU = "UPDATE trans_upn SET id_trans_upn='$idT', id_kondektur='$IDK', id_bus='$IDB', id_driver='$IDD', jumlah_km='$JK', tanggal='$TGL' WHERE id_trans_upn=$idT";
        $result = mysqli_query($connec, $queryU);

        header('Location: TransUPN.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trans UPN</title>
</head>
<body>
    <h2 style="margin: 30px 0 30px;">Update Data Trans Bus</h2>
        <form action="UpdateTransUPN.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
                <div>
                    <label>ID Trans UPN</label>
                    <input type="text" value="<?= $data['id_trans_upn'] ?>" name="id_trans_upn">
                </div>

                <div>
                    <label>ID Kondektur</label>
                    <input type="text" value="<?= $data['id_kondektur'] ?>" name="id_kondektur">
                </div>

                <div>
                    <label>ID Bus</label>
                    <input type="text" value="<?= $data['id_bus'] ?>" name="id_bus">
                </div>

                <div>
                    <label>ID Driver</label>
                    <input type="text" value="<?= $data['id_driver'] ?>" name="id_driver">
                </div>

                <div>
                    <label>Jumlah KM</label>
                    <input type="text" value="<?= $data['jumlah_km'] ?>" name="jumlah_km">
                </div>

                <div>
                    <label>Tanggal</label>
                    <input type="text" value="<?= $data['tanggal'] ?>" name="tanggal">
                </div>

            <?php endwhile ?>
            <button type="submit">Simpan Perubahan</button>
        </form>
</body>
</html>
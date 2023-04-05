<?php
    include "Connect.php";

   
    if ($_SERVER['REQUEST_METHOD'] === 'GET') 
    {
        if (isset($_GET['id'])) {
            $idDriver = $_GET['id'];
            $queryDr = "SELECT * FROM driver WHERE id_driver = $idDriver";

            $result = mysqli_query($connec, $queryDr);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $idDriver = $_POST['id_driver'];
        $Nama = $_POST['nama'];
        $NoSIM = $_POST['no_sim'];
        $ALAMAT = $_POST['alamat'];

        $queryU = "UPDATE driver SET id_driver='$idDriver', nama='$Nama', no_sim='$NoSIM', alamat='$ALAMAT' WHERE id_driver='$idDriver'";
        $result = mysqli_query($connec, $queryU);

        header('Location: Driver.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Driver</title>
</head>
<body>
    <h2 style="margin: 30px 0 30px;">Update Data Trans Driver</h2>
        <form action="UpdateDriver.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
                <div>
                    <label>ID Driver</label>
                    <input type="text" value="<?= $data['id_driver'] ?>" name="id_driver">
                </div>

                <div>
                    <label>Nama</label>
                    <input type="text" value="<?= $data['nama'] ?>" name="nama">
                </div>

                <div>
                    <label>No Sim</label>
                    <input type="text" value="<?= $data['no_sim'] ?>" name="no_sim">
                </div>

                <div>
                    <label>Alamat</label>
                    <input type="text" value="<?= $data['alamat'] ?>" name="alamat">
                </div>
            <?php endwhile ?>
            <button type="submit">Simpan Perubahan</button>
        </form>
</body>
</html>
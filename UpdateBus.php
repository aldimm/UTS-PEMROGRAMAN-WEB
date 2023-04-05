<?php
    include "Connect.php";

   
    if ($_SERVER['REQUEST_METHOD'] === 'GET') 
    {
        if (isset($_GET['id_bus'])) {
            $idBus = $_GET['id_bus'];
            $query = "SELECT * FROM bus WHERE id_bus = $idBus";

            $result = mysqli_query($connec, $query);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $idBus = $_POST['id_bus'];
        $plat = $_POST['plat'];
        $status = $_POST['status'];

        $queryU = "UPDATE bus SET id_bus='$idBus', plat='$plat', status='$status' WHERE id_bus=$idBus";
        $result = mysqli_query($connec, $queryU);

        header('Location: Bus.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bus</title>
</head>
<body>
    <h2 style="margin: 30px 0 30px;">Update Data Trans Bus</h2>
        <form action="UpdateBus.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
                <div>
                    <label>ID BUS</label>
                    <input type="text" value="<?= $data['id_bus'] ?>" name="id_bus">
                </div>

                <div>
                    <label>PLAT</label>
                    <input type="text" value="<?= $data['plat'] ?>" name="plat">
                </div>

                <div>
                    <label>Status</label>
                    <input type="text" value="<?= $data['status'] ?>" name="status">
                </div>

            <?php endwhile ?>
            <button type="submit">Simpan Perubahan</button>
        </form>
</body>
</html>
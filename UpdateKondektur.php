<?php
    include "Connect.php";

   
    if ($_SERVER['REQUEST_METHOD'] === 'GET') 
    {
        if (isset($_GET['id'])) {
            $idK = $_GET['id'];
            $query = "SELECT * FROM kondektur WHERE id_kondektur = $idK";

            $result = mysqli_query($connec, $query);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $idK = $_POST['id_kondektur'];
        $Nama = $_POST['nama'];

        $queryU = "UPDATE kondektur SET id_kondektur='$idK', nama='$Nama' WHERE id_kondektur=$idK";
        $result = mysqli_query($connec, $queryU);

        header('Location: Kondektur.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kondektur</title>
</head>
<body>
    <h2 style="margin: 30px 0 30px;">Update Data Trans Bus</h2>
        <form action="UpdateKondektur.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
                <div>
                    <label>ID Kondektur</label>
                    <input type="text" value="<?= $data['id_kondektur'] ?>" name="id_kondektur">
                </div>

                <div>
                    <label>Nama</label>
                    <input type="text" value="<?= $data['nama'] ?>" name="nama">
                </div>

            <?php endwhile ?>
            <button type="submit">Simpan Perubahan</button>
        </form>
</body>
</html>
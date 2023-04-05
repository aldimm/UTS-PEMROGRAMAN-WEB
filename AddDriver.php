<?php
    include "Connect.php";

    if(isset($_POST['Penambahan']))
    {
        if($_POST['Penambahan']=="Tambah")
        {
            $IDD = $_POST['id_driver'];
            $NAMA = $_POST['nama'];
            $SIM = $_POST['no_sim'];
            $ALAMAT = $_POST['alamat'];
        }

        $queryD = "INSERT INTO driver VALUES('$IDD', '$NAMA', '$SIM', '$ALAMAT')";
        $sql = mysqli_query($connec, $queryD);

        if($sql)
            {
               header("location: Driver.php");
            }
            else
            {
                echo "Mengalami Kesalahan";
            }

    }

?>    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="FITUR.css">
</head>
<body>
    <table>
    <h3>Pengisian Data Driver</h3>  
    <form method="POST" action="AddDriver.php">
    
        <tr>
            <td>ID Driver</td>
            <td><input type="text" name="id_driver" size="30"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"  size="30"></td>
        </tr>  

        <tr>
            <td>No Sim</td>
            <td><input type="text" name="no_sim"  size="30"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"  size="30"></td>
        </tr>

        </tr> 
            <td><input class="AB" type="submit" name="Penambahan" value="Tambah"></td>
    </table>
    </form>
    </div>
</body>
</html>
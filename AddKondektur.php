<?php
    include "Connect.php";

    if(isset($_POST['Penambahan']))
    {
        if($_POST['Penambahan']=="Tambah")
        {
            $IDK = $_POST['id_kondektur'];
            $NAMA = $_POST['nama'];
        }

        $queryk = "INSERT INTO kondektur VALUES('$IDK', '$NAMA')";
        $sql = mysqli_query($connec, $queryk);

        if($sql)
        {
           header("location: Kondektur.php");
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
    <link rel="stylesheet" href="FITUR.CSS">
</head>
<body>
    <table>
    <h3>Pengisian Data Kondektur</h3>  
    <form method="POST" action="AddKondektur.php">
    
        <tr>
            <td>ID Kondektur</td>
            <td><input type="text" name="id_kondektur" size="30"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"  size="30"></td>
        </tr>  

        </tr> 
            <td><input class="AB" type="submit" name="Penambahan" value="Tambah"></td>
    </table>
    </form>
    </div>
</body>
</html>
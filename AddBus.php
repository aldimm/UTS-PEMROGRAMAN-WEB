<?php
    include "Connect.php";

    if(isset($_POST['Penambahan']))
    {
        if($_POST['Penambahan']=="Tambah")
        {
            $ID = $_POST['id_bus'];
            $PLATE = $_POST['plat'];
            $STATUS = $_POST['status'];
        }

        $queryB = "INSERT INTO bus VALUES('$ID', '$PLATE', '$STATUS')";
        $sql = mysqli_query($connec, $queryB);

        if($sql)
            {
               header("location: Bus.php");
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
    <h3>Pengisian Data Bus</h3>  
    <form method="POST" action="AddBus.php">
    
        <tr>
            <td>ID Bus</td>
            <td><input type="text" name="id_bus" size="30"></td>
        </tr>

        <tr>
            <td>Plat</td>
            <td><input type="text" name="plat"  size="30"></td>
        </tr>  

        <tr>
            <td>Status</td>
            <td><input type="text" name="status"  size="30"></td>
        </tr>

        </tr> 
            <td><input class="AB" type="submit" name="Penambahan" value="Tambah"></td>
    </table>
    </form>
    </div>
</body>
</html>
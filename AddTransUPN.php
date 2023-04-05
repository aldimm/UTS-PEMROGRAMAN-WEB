<?php
    include "Connect.php";

    if(isset($_POST['Penambahan']))
    {
        if($_POST['Penambahan']=="Tambah")
        {
            $IDT = $_POST['id_trans_upn'];
            $IDK = $_POST['id_kondektur'];
            $IDB = $_POST['id_bus'];
            $IDD = $_POST['id_driver'];
            $JK = $_POST['jumlah_km'];
            $TGL = $_POST['tanggal'];
        }

        $queryT = "INSERT INTO trans_upn VALUES('$IDT', '$IDK', '$IDB', '$IDD', '$JK', '$TGL')";
        $sql = mysqli_query($connec, $queryT);

        if($sql)
            {
               header("location: TransUPN.php");
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
    <h3>Pengisian Data Trans UPN</h3>  
    <form method="POST" action="AddTransUPN.php">
    
        <tr>
            <td>ID Trans UPN</td>
            <td><input type="text" name="id_trans_upn" size="30"></td>
        </tr>

        <tr>
            <td>ID Kondektur</td>
            <td><input type="text" name="id_kondektur"  size="30"></td>
        </tr>  

        <tr>
            <td>ID Bus</td>
            <td><input type="text" name="id_bus"  size="30"></td>
        </tr>

        <tr>
            <td>ID Driver</td>
            <td><input type="text" name="id_driver"  size="30"></td>
        </tr>

        <tr>
            <td>Jumlah KM</td>
            <td><input type="text" name="jumlah_km"  size="30"></td>
        </tr>

        <tr>
            <td>Tanggal</td>
            <td><input type="text" name="tanggal"  size="30"></td>
        </tr>

        </tr> 
            <td><input class="AB" type="submit" name="Penambahan" value="Tambah"></td>
    </table>
    </form>
    </div>
</body>
</html>
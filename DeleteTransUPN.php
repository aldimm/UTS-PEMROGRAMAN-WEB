<?php
    include "Connect.php";

    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id_trans_upn'])) {
            $idT = $_GET['id_trans_upn'];
            $query = "DELETE FROM trans_upn WHERE id_trans_upn = '$idT'";

            $result = mysqli_query($connec,$query);

            header('Location: TransUPN.php');
        }
    }
?>
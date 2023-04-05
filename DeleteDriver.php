<?php
    include "Connect.php";

    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $idDri = $_GET['id'];
            $query = "DELETE FROM driver WHERE id_driver = '$idDri'";

            $result = mysqli_query($connec,$query);

            header('Location: Driver.php');
        }
    }
?>
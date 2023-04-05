<?php
    include('Connect.php');

    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id_bus'])) {
            $idBus = $_GET['id_bus'];
            $query = "DELETE FROM bus WHERE id_bus = '$idBus'";

            $result = mysqli_query($connec,$query);

            header('Location: Bus.php');
        }
    }
?>

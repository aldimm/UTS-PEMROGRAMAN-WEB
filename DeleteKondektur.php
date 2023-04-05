<?php
    include "Connect.php";

    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $idK = $_GET['id'];
            $query = "DELETE FROM kondektur WHERE id_kondektur = '$idK'";

            $result = mysqli_query($connec,$query);

            header('Location: Kondektur.php');
        }
    }
?>
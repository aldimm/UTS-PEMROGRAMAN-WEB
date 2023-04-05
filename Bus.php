<?php 
    include ('Connect.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .HIJAU
        {
            background-color: green;
        }
        .KUNING 
        {
            background-color : yellow;
        }
        .MERAH
        {
            background-color : red;
        }
    </style>
    <link rel="stylesheet" href="FITUR.css">
    <title>Data Bus</title>
</head>
<body>
    <h2>Data Bus</h2>
    <a href="AddBus.php" class="button">
        Tambah Data
    </a>
    <form method = "GET">
        <label for="status"><br>Filter berdasarkan status : </label>
        <select class="select_filter" id="status_id" name="status" required>
            <option value="all">-- Pilih status --</option>
            <option value="1" <?php if (isset($_GET['status']) && $_GET['status'] == 1) 
            {
                echo " selected";
            } ?>> Beroperasi / Aktif</option>
            <option value="2" <?php if (isset($_GET['status']) && $_GET['status'] == 2) 
            {
                echo " selected";
            } ?>> Cadangan</option>
            <option value="0" <?php if (isset($_GET['status']) && $_GET['status'] == 0) 
            {
                echo " selected";
            } ?>> Dalam Perbaikan / Rusak</option>
        </select>
        <input type="submit" value="Filter">
    </form>
    <?php 
        if (isset($_GET['status'])) 
        {
            $status = $_GET['status'];
            $query = "select bus.id_bus,bus.plat,bus.status,trans_upn.jumlah_km from bus join trans_upn on bus.id_bus = trans_upn.id_trans_upn WHERE status = '$status'";
        } 
        else 
        {
            $query = "select bus.id_bus,bus.plat,bus.status,trans_upn.jumlah_km from bus join trans_upn on bus.id_bus = trans_upn.id_trans_upn";
        }
        $result = mysqli_query($connec, $query);
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Bus</th>
                    <th>Plat</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            <?php while($data = mysqli_fetch_array($result)): ?>
                <tr class="<?php echo $data['status'] == '1' ? 'HIJAU' : ($data['status'] == '2' ? 'KUNING' : 'MERAH'); ?>">
                    <td><?php echo $data['id_bus'];  ?></td>
                    <td><?php echo $data['plat'];  ?></td>
                    <td><?php echo $data['status'];  ?></td>
                    <td>
                        <a href="<?php echo "UpdateBus.php?id_bus=".$data['id_bus']; ?>">Update</a>
                        <a href="<?php echo "DeleteBus.php?id_bus=".$data['id_bus']; ?>"> Delete</a>
                    </td>
                </tr>
            <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>
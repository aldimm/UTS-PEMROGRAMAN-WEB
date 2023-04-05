<?php
include "Connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAJI DRIVER</title>
</head>

<body>
        <table>
                    <table border="1" align="center">
                        <thead>
                            <form action="" method="post">
                                <label for="bulan">Pilih Bulan:</label>
                                <select name="bulan" id="bulan">
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                                <button type="submit">Tampilkan</button>
                            </form>
                            <tr bgcolor="tan">
                                <th>id_driver</th>
                                <th>nama</th>
                                <th>Total KM</th>
                                <th>Gaji</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['bulan'])) {
                                $bulan = $_POST['bulan'];
                                //...
                            } else {
                                $bulan = "01";
                            }
                            ?>

                            <h2 style="text-align:center">PENDAPATAN DRIVER BULAN KE-
                                <?php echo $bulan ?>
                            </h2>
                            <?php
                            $query = "SELECT DRIVER.id_driver, DRIVER.nama, SUM(trans_upn.jumlah_km) as total_km
                                FROM driver
                                JOIN trans_upn ON driver.id_driver = trans_upn.id_driver
                                WHERE MONTH(trans_upn.tanggal) = '$bulan' AND YEAR(trans_upn.tanggal) = YEAR(CURRENT_DATE())
                                GROUP BY driver.id_driver";

                            $result = mysqli_query($connec, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo $row['id_driver'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $row['nama'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $row['total_km'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo "Rp." . $row['total_km'] * 1500;
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                mysqli_free_result($result);
                            } else {
                                ?>
                            </tbody>

                    </td>

                </tr>
            </table>
            <?php
            echo "<i style='margin-left:70px'>Tidak ada data.<i/>";
                            }mysqli_close($connec);
            ?>
        <a href="DRIVER.php"><button style="margin-top:700px; float:left;" class="tambahdata">Kembali</button></a>
</body>

</html>
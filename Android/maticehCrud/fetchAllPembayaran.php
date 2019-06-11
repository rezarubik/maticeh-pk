<?php
require_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM pembayaran";
    //Mendapatkan Hasil
    try {
        $r = mysqli_query($con, $sql);
        $result = array();

        while ($row = mysqli_fetch_array($r)) {
            array_push($result, array(
                "id" => $row['id'],
                "id_pemesanan" => $row['id_pemesanan'],
                "jumlah_pertemuan" => $row['jumlah_pertemuan'],
                "tanggal_bayar" => $row['tanggal_bayar'],
                "tanggal_verifikasi" => $row['tanggal_verifikasi'],
                "total_pembayaran" => $row['total_pembayaran'],
                "status" => $row['status']
            ));
        }

        //Menampilkan dalam format JSON
        echo json_encode(array('result' => $result));
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    mysqli_close($con);
}
?>
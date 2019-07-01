<?php 
    require_once('connection.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_user = $_POST['id'];

        $sql = "SELECT * FROM notifikasi WHERE id_user = '$id_user'";
        try {
            if(mysqli_query($con, $sql)){
                echo "Pembayaran Sedang Diproses";

            }
            else{
                echo "Isi Kembali Data Anda!";
            }
            //Menampilkan dalam format JSON
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    mysqli_close($con);
?>
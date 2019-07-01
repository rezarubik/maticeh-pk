<?php 
    require_once('connection.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_user = $_POST['id_user'];
        $id_pembayaran = $_POST['id_pembayaran'];
        $namaBank = $_POST['namaBank'];
        $namaPemilikBank = $_POST['namaPemilikBank'];
        $noRekening = $_POST['noRekening'];
        $tglTransfer = $_POST['tglTransfer'];
        $id_bank = $_POST['id_bank'];

        
        $sql = "INSERT INTO rekening_user(id_user, jenis_bank, nomor_rekening, atas_nama) VALUES 
        ('$id_user', '$namaBank', '$namaPemilikBank','$noRekening')";

        // $sql = "SELECT * FROM notifikasi WHERE id_user = '$id_user'";
        try {
            if(mysqli_query($con, $sql)){
                $sql0 = "SELECT id from rekening_user ORDER BY id DESC";
                $r = mysqli_query ($con, $sql0);
                $row = mysqli_fetch_array ($r);
                $id_bank_pengirim = $row['id'];
                $sql1 = "UPDATE pembayaran SET tanggal_bayar = '$tglTransfer', 
                id_bank_tujuan = '$id_bank',id_bank_pengirim = '$id_bank_pengirim',status = 1 WHERE id = '$id_pembayaran'";
                
                try {
                    if (mysqli_query ($con, $sql1)) {
                        echo "Konfirmasi Pembayaran Sedang Diproses, Mohon Tunggu Kabar Selanjutnya!";
                        
                    } else {
                        echo "Pembayaran Anda Gagal Diproses";
                    }
                } catch (Exception $e) {
                   echo $e->getMessage();
                }
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
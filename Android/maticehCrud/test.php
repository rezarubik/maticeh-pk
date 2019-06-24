<?php
    //Import File Koneksi Database
	require_once('connection.php');
	
	$id_pemesan = 43;

    $sql = "SELECT pbyr.id,
    pbyr.id_pemesan,
    pbyr.tanggal_tagihan,
    pbyr.tanggal_bayar,
    pbyr.tanggal_verifikasi,
    pbyr.total_pembayaran,
    bt.nama_bank as nama_bank_tujuan,
    bt.no_rekening as no_rekening_tujuan,
    bt.atas_nama as atas_nama_tujuan,
    ru.jenis_bank as nama_bank_pengirim,
    ru.nomor_rekening as no_rekening_pengirim,
    ru.atas_nama as atas_nama_pengirim,
    pbyr.status
    FROM pembayaran pbyr LEFT JOIN rekening_user ru ON pbyr.id_bank_pengirim = ru.id
    LEFT JOIN bank_tujuan bt ON pbyr.id_bank_tujuan = bt.id
    WHERE pbyr.id_pemesan ='$id_pemesan'";
    
    //Mendapatkan Hasil
    try {
        $r = mysqli_query($con, $sql);
        $result = array();

        while ($row = mysqli_fetch_array($r)) {
            array_push($result, array(
                "id" => $row['id'],
                "id_pemesan" => $row['id_pemesan'],
                "tanggal_tagihan"=>$row['tanggal_tagihan'],
                "tanggal_bayar" => $row['tanggal_bayar'],
                "tanggal_verifikasi" => $row['tanggal_verifikasi'],
                "total_pembayaran" => $row['total_pembayaran'],
                "nama_bank_tujuan" => $row['nama_bank_tujuan'],
                "no_rekening_tujuan" => $row['no_rekening_tujuan'],
                "atas_nama_tujuan" => $row['atas_nama_tujuan'],
                "nama_bank_pengirim" => $row['nama_bank_pengirim'],
                "no_rekening_pengirim" => $row['no_rekening_pengirim'],
                "atas_nama_pengirim"=> $row['atas_nama_pengirim'],
                "status" => $row['status']
            ));
        }

        //Menampilkan dalam format JSON
        echo json_encode(array('result' => $result));
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    mysqli_close($con);

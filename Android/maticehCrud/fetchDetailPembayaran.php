<?php

$id_pembayaran = $_POST['id'];

// $id_guru = 36;
//Import File Koneksi Database
require_once('connection.php');

try {
    //Membuat SQL Query
    $sql = "SELECT
                pemesanan.id,
                pemesanan.id_guru,
                pemesanan.id_pemesan,
                pemesanan.id_mapel,
                pemesanan.nama_murid,
                pemesanan.kelas,
                pemesanan.tgl_pertemuan_pertama,
                pemesanan.status,
                pemesanan.created_at,
                pemesanan.updated_at,
                tguru.name AS guru_name,
                tpemesan.name AS pemesan_name,
                tpemesan.provinsi AS pemesan_provinsi,
                tpemesan.kabupaten_kota AS pemesan_kabupaten_kota,
                tpemesan.alamat AS pemesan_alamat,
                mata_pelajaran.nama_mapel AS mapel_name,
                pemesanan.id_pembayaran,
                COUNT(absen.id) as jumlah_pertemuan,
                COUNT(absen.id) * jenjang.harga AS jumlah_bayar,
                jenjang.harga AS harga_jenjang,
                jenjang.jenjang AS nama_jenjang

            FROM pemesanan,
                (SELECT * FROM users WHERE role = 1) AS tpemesan,
                (SELECT * FROM users WHERE role = 2) AS tguru,
                mata_pelajaran,jenjang,absen,pembayaran

            WHERE pemesanan.id_guru = tguru.id
                AND pemesanan.id_mapel = mata_pelajaran.id
                AND pemesanan.id_pemesan = tpemesan.id
                AND pemesanan.id_pemesan = pembayaran.id_pemesan
                AND EXTRACT(YEAR_MONTH FROM absen.created_at) = EXTRACT(YEAR_MONTH FROM pembayaran.tanggal_tagihan)
                AND absen.id_pemesanan = pemesanan.id
                AND mata_pelajaran.jenjang=jenjang.id_jenjang
                AND pembayaran.id = '$id_pembayaran'
                AND pemesanan.status = 1

            GROUP BY
                absen.id_pemesanan,
                EXTRACT(YEAR_MONTH FROM absen.created_at)";

        //Mendapatkan Hasil
        $r = mysqli_query($con,$sql);

        //Membuat Array Kosong
        $result = array();

        while($row = mysqli_fetch_array($r)){

            //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
            array_push($result,array(
                "id"=>$row['id'],
                "id_guru"=>$row['id_guru'],
                "id_pemesan"=>$row['id_pemesan'],
                "id_mapel"=>$row['id_mapel'],
                "nama_murid"=>$row['nama_murid'],
                "kelas"=>$row['kelas'],
                "tgl_pertemuan_pertama"=>$row['tgl_pertemuan_pertama'],
                "status"=>$row['status'],
                "created_at"=>$row['created_at'],
                "updated_at"=>$row['updated_at'],
                "guru_name"=>$row['guru_name'],
                "pemesan_name"=>$row['pemesan_name'],
                "pemesan_provinsi"=>$row['pemesan_provinsi'],
                "pemesan_kabupaten_kota"=>$row['pemesan_kabupaten_kota'],
                "pemesan_alamat"=>$row['pemesan_alamat'],
                "mapel_name"=>$row['mapel_name'],
                "id_pembayaran"=>$row['id_pembayaran'],
                "sesi"=>$row['jumlah_pertemuan'],
                "harga_jenjang"=>$row['harga_jenjang'],
                "total_pembayaran"=>$row['jumlah_bayar'],
                "nama_jenjang"=>$row['nama_jenjang']
            ));
        }

        //Menampilkan Array dalam Format JSON
        echo json_encode(array('result'=>$result));

        mysqli_close($con);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), " \n ";
    }

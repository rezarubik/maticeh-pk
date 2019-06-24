<?php 
    require_once('connection.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id_pemesanan = $_POST['id_pemesanan'];

        $sql = "SELECT absen.*, tbl_pemesan.name as nama_pemesan, tbl_guru.name as nama_guru, pemesanan.nama_murid, mata_pelajaran.nama_mapel, jenjang.jenjang
        FROM absen,
        (SELECT * FROM users WHERE role = 1) tbl_pemesan,
        (SELECT * FROM users WHERE role = 2) tbl_guru,
        pemesanan, mata_pelajaran, jenjang
        WHERE absen.id_pemesanan = pemesanan.id
        && pemesanan.id_pemesan = tbl_pemesan.id
        && pemesanan.id_guru = tbl_guru.id
        && pemesanan.id_mapel = mata_pelajaran.id
        && mata_pelajaran.jenjang = jenjang.id_jenjang
        && absen.id_pemesanan = '$id_pemesanan'";

        try {
            $r = mysqli_query($con, $sql);
            $result = array();

            while ($row = mysqli_fetch_array($r)) {
                array_push($result, array(
                    "id" => $row['id'],
                    "id_pemesanan" => $row['id_pemesanan'],
                    "status"=>$row['status'],
                    "created_at" => $row['created_at'],
                    "updated_at" => $row['updated_at'],
                    "nama_pemesan" => $row['nama_pemesan'],
                    "nama_guru" => $row['nama_guru'],
                    "nama_murid" => $row['nama_murid'],
                    "nama_mapel" => $row['nama_mapel'],
                    "jenjang" => $row['jenjang']
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
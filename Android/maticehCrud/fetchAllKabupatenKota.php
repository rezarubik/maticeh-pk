<?php 
    require_once('connection.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $provinsi = $_POST['provinsi'];

        $sql = "SELECT pk.id, pk.kab_kota, p.provinsi FROM prov_kabot pk, provinsi p WHERE pk.provinsi = p.id_provinsi && p.provinsi = '$provinsi'";

        try {
            $r = mysqli_query($con, $sql);
            $result = array();

            while ($row = mysqli_fetch_array($r)) {
                array_push($result, array(
                    "id"=>$row['id'],
                    "kabupaten_kota" => $row['kab_kota'],
                    "provinsi"=>$row['provinsi']
                ));
            }
            //Menampilkan dalam format JSON
            echo json_encode(array('result' => $result));
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    mysqli_close($con);
?>
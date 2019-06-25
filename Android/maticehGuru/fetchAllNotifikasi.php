<?php 
    require_once('connection.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_user = $_POST['id'];

        $sql = "SELECT * FROM notifikasi WHERE id_user = '$id_user'";
        try {
            $r = mysqli_query($con, $sql);
            $result = array();

            while ($row = mysqli_fetch_array($r)) {
                array_push($result, array(
                    "id"=>$row['id'],
                    "pesan" => $row['pesan'],
                    "status"=>$row['status'],
                    "tgl_notifikasi"=>$row['tgl_notifikasi'],
                    "id_user"=>$row['id_user']
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
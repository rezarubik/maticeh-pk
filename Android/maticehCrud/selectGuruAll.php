<?php 

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
    //role = 
        // 0 -> admin
        // 1 -> pemesan
        // 2 -> guru

	//Import File Koneksi Database
require_once('connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){

	//Membuat SQL Query
	$sql = "SELECT DISTINCT(users.id), users.*, guru.direktori_cv, guru.institusi FROM users, guru, bahan_ajar, mata_pelajaran WHERE users.role = 2 && users.id = guru.id_guru && bahan_ajar.id_mapel = mata_pelajaran.id && bahan_ajar.id_guru = users.id && users.status = 1";

	// $nama_murid = $_POST['nama_murid'];
	$nama_jenjang = $_POST['nama_jenjang'];
	// $kelas = $_POST['kelas'];
	$mapel_name = $_POST['mapel_name'];
	$provinsi = $_POST['provinsi'];
	$kabupaten_kota = $_POST['kabupaten_kota'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	// $tgl_pertemuan_pertama = $_POST['tgl_pertemuan_pertama'];

	if($provinsi != "-"){
		$sql = $sql." && users.provinsi = '".$provinsi."'";
	}

	if($kabupaten_kota != "-"){
		$sql = $sql." && users.kabupaten_kota = '".$kabupaten_kota."'";
	}

	if($jenis_kelamin != "-"){
		$sql = $sql." && users.jenis_kelamin = '".$jenis_kelamin."'";
	}

	if($mapel_name != "-"){
		$sql = $sql." && mata_pelajaran.nama_mapel = '".$mapel_name."'";
	}
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id"=>$row['id'],
			"name"=>$row['name'],
            "email"=>$row['email'],
            "remember_token"=>$row['remember_token'],
			"alamat"=>$row['alamat'],
			"provinsi"=>$row['provinsi'],
			"kabupatenKota"=>$row['kabupaten_kota'],
			"status"=>$row['status'],
            "role"=>$row['role'],
            "no_hp"=>$row['no_hp'],
            "jenis_kelamin"=>$row['jenis_kelamin'],
            "created_at"=>$row['created_at'],
            "updated_at"=>$row['updated_at'],
			"direktori_cv"=>$row['direktori_cv'],
			"institusi" => $row['institusi']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
}
?>
<?php 

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */

 //Mendapatkan Nilai ID
 $id = $_GET['id'];
 if (empty($id)) {
 	echo "id is empty";
 }
 
 //Import File Koneksi Database
 require_once('connection.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM users WHERE id=$id;";

 
 //Menghapus Nilai pada Database 
 
 try {
	if(mysqli_query($con,$sql)){
	 	echo 'Delete successful!';
	}else{
		echo 'Delete unsuccessful, please check your code!';
	}
}catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

 
 mysqli_close($con);
 ?>
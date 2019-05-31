<?php 

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
 // var_dump($_POST);
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 


		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$desciption = $_POST['description'];
		
		//import file koneksi database 
		require_once('connection.php');
		
		//Membuat SQL Query
		$sql = "UPDATE users SET name = '$name', email = '$email', description = '$desciption' WHERE id = $id;";
		
		//Meng-update Database
		try {
			if(mysqli_query($con,$sql)){
				echo 'Update success!';
			}else{
				echo 'Update unsuccessful, please check your code';
			}
		} catch (Exception $e) {
		    echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
		mysqli_close($con);
	}
?>
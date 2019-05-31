<?php

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$email = $_POST['email'];
		$description = $_POST['description'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO users (name,email,description) VALUES ('$name','$email','$description')";
		//$sql = "INSERT INTO users (name,email,description) VALUES ('Rafi','mrafi@email.com','this is my first account')";
		
		//Import File Koneksi database
		require_once('connection.php');
		
		//Eksekusi Query database
		

		try {
			if(mysqli_query($con,$sql)){
				echo 'Insertion success!';
			}else{
				echo 'Insertion unsuccessful, please check your code';
			}
		} catch (Exception $e) {
		    echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
		mysqli_close($con);
	};
?>
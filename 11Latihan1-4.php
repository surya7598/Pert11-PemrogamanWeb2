<?php
$con = mysqli_connect("localhost","root","","database");

// Check connection
if (mysqli_connect_errno()) {
  echo "Not able to connect to server" . mysqli_connect_error();
  exit();
}
?>

<? 
mysqli_connect("localhost","root",""); 
$dbname="lat_dbase"; 
$cek=mysqli_query("CREATE DATABASE $dbname") or die("Couldn't Create Database: $dbname");   
if($cek){   
	echo "Database $dbname berhasil dibuat"; 
} 
?>

<? 
mysqli_connect("localhost","root","","lat_dbase"); //koneksi database
//membuat tabel 
$sql = "CREATE TABLE tbl_mhs     
( 
	mhsID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(mhsID), FirstName varchar(15), LastName varchar(15), Age int 
)"; 
mysqli_query($sql); 
// input data 
$input=mysqli_query("insert into tbl_mhs(FirstName,LastName,Age) values('Anjar','Prabowo',25)");
?>

<?php 
$con = mysqli_connect("localhost","root","","lat_dbase"); 
if (!$con)   
{   
	die('Could not connect: ' . mysqli_error());   
} 
mysqli_query("INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Karina', 'Suwandi', '29')"); 
mysqli_query("INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Glenn', 'Gandari', '32')"); 
mysqli_close($con); 
?>
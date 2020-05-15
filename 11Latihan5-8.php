<?php  
mysqli_connect("localhost","root","","lat_dbase");  
// mysql_select_db("lat_dbase");  
$hasil= mysqli_query("select * from tbl_mhs");  
While($data=mysqli_fetch_row($hasil))  
{    
	echo "$data[0] $data[1] $data[2]<br>";  
} 
?>

<?php  
mysqli_connect("localhost","root","","lat_dbase");  
$hasil=mysqli_query("select * from tbl_mhs");  
While($data=mysqli_fetch_array($hasil))  
{   
	echo "$data[FirstName] $data[LastName] $data[Age]<br>";  
} 
?>

<? 
mysqli_connect("localhost","root","","lat_dbase"); 
$hasil=mysqli_query("select * from tbl_mhs"); 
$hit=mysqli_num_rows($hasil); 
echo "jumlah record $hit"; 
?>

<?php 
$con = mysqli_connect("localhost","root","","lat_dbase"); 
if (!$con)   
	{   
		die('Could not connect: ' . mysqli_error());   
	} 
$sql="INSERT INTO tbl_mhs (FirstName, LastName, Age)VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')"; 
if (!mysqli_query($sql,$con))   
	{   
		die('Error: ' . mysqli_error());   
	} 
echo "1 record added"; 
mysqli_close($con) 
?>

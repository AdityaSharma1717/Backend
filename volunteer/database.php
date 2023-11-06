<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="volunteer";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submit']))
{	
	 $volunteerid = $_POST['volunteerid'];
	 $aged = $_POST['aged'];
	 $email = $_POST['email'];
	 $dateofjoining = $_POST['dateofjoining'];

	 $sql_query = "INSERT INTO project (volunteerid,aged,email,dateofjoining)
	 VALUES ('$volunteerid','$aged','$email','$dateofjoining')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
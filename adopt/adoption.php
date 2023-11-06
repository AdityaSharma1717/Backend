<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="adopt";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submit']))
{	
	 $volunteer = $_POST['volunteer'];
	 $breed = $_POST['breed'];
	 $gender = $_POST['gender'];


	 $sql_query = "INSERT INTO adopt_dog (volunteer,breed,gender)
	 VALUES ('$volunteer','$breed','$gender')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
  <?php 
	$server ="localhost";
	$username ="root";
	$password = "";
	$database ="online home renting system";

$conn  = mysqli_connect ($server, $username, $password, $database);

if(!$conn) {
	die("you could not connect to the database" . mysqli_connect_error);

}else{
	
	
}


?>
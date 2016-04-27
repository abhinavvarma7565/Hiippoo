<?php
session_start();
$_SESSION['username'] = $_POST['username'];
date_default_timezone_set("America/Los_Angeles");
$host="localhost";
$user="abhi7565";
$password="Qweasdzxc1";
$db="abregdb"; 
$time =date( 'Y/m/d g:i:s A');
mysql_connect($host, $user, $password);
mysql_select_db($db);
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
        $password = md5($password);
	$sql="SELECT * FROM enc WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res=mysql_query($sql);
}
	if(mysql_num_rows($res)==1)
 {
// Set username session variable



mysql_connect($host, $user, $password);
mysql_select_db($db);


$query = "INSERT INTO log (username,time) VALUES ('$username','$time')";
       $data = mysql_query ($query)or die(mysql_error()); 

 header('Location: home1.php');
}
else
{
// Jump to login page
header('Location: signup.html');
}
?>

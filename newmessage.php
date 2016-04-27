<?php
session_start();
$username = $_SESSION['username'];
$team = $_SESSION['team'];
if(isset($_POST['message']))
{
 $link = mysqli_connect('localhost','abhi7565','Qweasdzxc1','abregdb');
    if(!$link)
	{
		die('could not connect: '.mysql_error());}
	else
{}
	$message = mysqli_real_escape_string($link,$_POST['message']);
	$username = mysqli_real_escape_string($link,$_SESSION['username']);
$sql = "insert into messages (message, username, team) values('$message', '$username', '$team')";
$result = mysqli_query($link,$sql);
mysqli_close($link);
}
echo'<html>';
echo'<head></head><body>';
echo'<form action="newmessage.php" method="post">';
echo'<input type="text" name="message" size="100"/>';
echo'<input type="submit" name="Send"/>';
echo'</form>';
echo'</body></html>';

?>
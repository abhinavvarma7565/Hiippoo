<html>
<head>
<meta http-equiv="refresh" content="3">
<title>Messages</title>
</head>
<body>
<?php
session_start();
$username = $_SESSION['username'];
$team = $_SESSION['team'];
$link = mysqli_connect('localhost','abhi7565','Qweasdzxc1','abregdb'); 
    if(!$link)
	{
		die('could not connect: '.mysql_error());}
	else
	{}
	$query = "select * from messages where team = '$team'";
	if($result = mysqli_query($link, $query)){
		while($row = mysqli_fetch_row($result))
		{
			echo $row['3'].':'.$row['1'].'</br>';
		}
		mysqli_free_result($result);
	}

mysqli_close($link);	    
?>
</body>
</html>
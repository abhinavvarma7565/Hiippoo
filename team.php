<html>
<body>

<?php
session_start();
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
header('Location: team.php');	   
}
$servername = "localhost";
$uname = "abhi7565";
$password = "Qweasdzxc1";
$dbname = "abregdb";

// Create connection
$conn = new mysqli($servername, $uname, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from team where username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Team:" . $row["team"] . "</br>";
echo " <td><a href='list_files.php?'>SELECT</a></td>
                </tr>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>
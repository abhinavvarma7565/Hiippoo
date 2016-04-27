<?php 
define('DB_HOST', 'localhost');
 define('DB_NAME', 'abregdb');
  define('DB_USER','abhi7565');
   define('DB_PASSWORD','Qweasdzxc1');
    $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) 
    or 
    die("Failed to connect to MySQL: " . mysql_error());
     $db=mysql_select_db(DB_NAME,$con) 
     or 
     die("Failed to connect to MySQL: " . mysql_error());
      function NewUser() { 
       $username = $_POST['username'];
       $password = $_POST['password'];
       $password = md5($password);
       $email = $_POST['email'];
       $education = $_POST['education'];
       $university = $_POST['university'];
       $query = "INSERT INTO enc (username,password,email,education,university) VALUES ('$username','$password','$email','$education','$university')";
       $data = mysql_query ($query)or die(mysql_error()); 
       if($data) { 
header("Location: http://www.hiippoo.com/login.html");
 } 

} 
function SignUp() 
       { 
if(!empty($_POST['username'])) 
 { 
  $query = mysql_query("SELECT * FROM enc WHERE username = '$_POST[username]'");
header("Location: http://www.hiippoo.com/signup.html");
  
if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
{ 
NewUser(); 
 } 
else 
{ 
echo"User";
 }
 } 
} 
if(isset($_POST['submit'])) 
{ 
SignUp(); 
}
?>
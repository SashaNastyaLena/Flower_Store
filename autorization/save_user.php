<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['usercode'])) { $usercode=$_POST['usercode']; if ($usercode ==''|| $usercode !=='1111') { unset($password);} }
if (isset($_POST['repassword'])) { $repassword=$_POST['repassword']; if ($repassword =='') { unset($repassword);} }

if ($repassword !== $password){
	exit("Error");
}
if (empty($login) or empty($password) or empty($usercode)) 
{	
exit ("You should fill all fields");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);


$login = trim($login);
$password = trim($password);



include ("database.php");
$query = "SELECT id FROM user WHERE login='$login'";
$result = mysqli_query($connection, $query);

$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("Choose another login");
}
$query2 = "INSERT INTO user (login,password) VALUES('$login','$password')";
$result2 = mysqli_query ($connection, $query2);

if ($result2=='TRUE')
{
require ("mainpage.html");
}

else {
echo "Error";
     }
?>
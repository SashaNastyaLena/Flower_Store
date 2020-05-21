<?php
session_start();

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

if (empty($login) or empty($password)) 
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


$query = "SELECT * FROM user WHERE login='$login'";
$result = mysqli_query($connection, $query);
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password']))
{
exit ("Your login or password is incorrect");
}
else {
          if ($myrow['password']==$password) {
          $_SESSION['login']=$myrow['login']; 
          $_SESSION['id']=$myrow['id'];
          require('mainpage.html');

          }

       else {
       exit ("Your login or password is incorrect");
	   }
}
?>
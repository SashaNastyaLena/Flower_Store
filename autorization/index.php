<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="proj.css">
    <title>Welcome</title>
    
</head>
<body>

<div id="login_container">
    <div id="form_container">
        <p class="login-text">Autorization</p>
        <form action="testreg.php" method="post" id="form">
            <input type="text" name="login" placeholder="Name" id="login" class="text_input" />
            <input type="password" name="password" placeholder="Password" id="password" class="text_input" />
            <input type="submit"  name="submit" value="" id="loginn" >
        </form>
        <center>
        <a href="reg.php">Registration</a>
        </center>
    </div>
</div>

<?php
//
//if (empty($_SESSION['login']) or empty($_SESSION['id']))
//{
//echo "You entered like, guest";
//}
//else
//   {
//    echo "You enter like".$_SESSION['login'];
//   }
//?>

</body>
</html>
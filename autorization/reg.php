<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="regform.css">
    <title>Welcome!</title>
  

</head>
<body>

<div id="login_container">
    <div id="form_container">
        <p class="login-text">Registration</p>
        <form method="post" action="save_user.php" id="form">
            <input type="password" name="usercode" placeholder="Special code" id="usercode" class="text_input" />
            <input type="text" name="login" placeholder="Name" id="login" class="text_input" />
            <input type="password" name="password" placeholder="Password" id="password" class="text_input" />
            <input type="password" name="repassword" placeholder="Confirm password" id="repassword" class="text_input" />
            <input type="submit"  name="submit" value=" " id="reg" >
        </form>
    </div>
</div>

</body>
</html>
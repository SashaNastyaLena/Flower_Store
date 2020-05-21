<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="supdata.css">
    <meta charset="utf-8">
    <title>Enter data</title>
    <script type="text/javascript">
        function supply(form){
            window.location = "http://localhost/flower/suppliers/suptable.php";
        }
    </script>
</head>
<body>
<center>
    <div id="login_container">
        <form method="post" action="supdata.php">
            Provider name  <br/>
            <input class="form-control" type="text" name="provider_name"/>
            Country <br/>
            <input class="form-control" type="text" name="country" />
            Phone <br/>
            <input class="form-control" type="text" name="phone" /><br/>
            <input type="submit" name="add" value="Add"/><br/>
        </form><br/>
        <center>
            <input type="button" class="btn btn-danger "
                   onclick="supply(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
        </center>
    </div>
</center>

<?php

$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');

if( isset( $_POST['add'] ) )
{
    $provider_name = $_POST['provider_name'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO provider (provider_name,country, phone) VALUES('$provider_name','$country', '$phone')";
    $result = mysqli_query($link, $query);
//    echo "<script>alert(\"Успешно добавлена!\");</script>";

}



?>


</body>
</html>

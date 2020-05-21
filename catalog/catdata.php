<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="data.css">
    <meta charset="utf-8">
    <title>Enter data</title>
    <script type="text/javascript">
        function catalog(form){
            window.location = "http://localhost/flower/catalog/cattable.php";
        }
    </script>
</head>
<body>
<center>
    <div id="login_container">
        <form method="post" action="catdata.php">
            Category id  <br/>
            <input class="form-control" type="text" name="category_id"/>
            Flower name <br/>
            <input class="form-control" type="text" name="flower_name" />
            Price <br/>
            <input class="form-control" type="number" name="price" />
            Availability <br/>
            <input class="form-control" type="number" name="is_available" />
            Provider <br/>
            <input class="form-control" type="number" name="provider_id" /><br/>
            <input type="submit" name="add" value="Add"/><br/>
        </form><br/>
        <center>
            <input type="button" class="btn btn-danger "
                   onclick="catalog(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
        </center>
    </div>
</center>

<?php

$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');

if( isset( $_POST['add'] ) )
{
    $flower_id = $_POST['flower_id'];
    $category_id = $_POST['category_id'];
    $flower_name = $_POST['flower_name'];
    $price = $_POST['price'];
    $is_available = $_POST['is_available'];
    $provider_id = $_POST['provider_id'];
    $query = "INSERT INTO flower_catalog (flower_id,category_id,flower_name,price,is_available,provider_id) VALUES('$flower_id','$category_id','$flower_name','$price','$is_available','$provider_id')";
    $result = mysqli_query($link, $query);
    echo "<script>alert(\"Успешно добавлена!\");</script>";

}



?>


</body>
</html>

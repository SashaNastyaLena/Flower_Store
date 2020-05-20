<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="data.css">
    <meta charset="utf-8">
    <title>Order</title>
    <script type="text/javascript">
        function order(form){
            window.location = "http://localhost/Flower_store/catalog/ordertable.php";
        }
    </script>
</head>
<body>
<center>
    <div id="login_container">
        <form method="post" action="orderdata.php">
            Client First Name  <br/>
            <input class="form-control" type="text" name="client_first_name"/>
            Client Second Name <br/>
            <input class="form-control" type="text" name="client_second_name" />
            Client Surname <br/>
            <input class="form-control" type="text" name="client_surname" />
            City ID <br/>
            <input class="form-control" type="number" name="city_id" />
            Adress <br/>
            <input class="form-control" type="text" name="adress" /><br/>
            Delivery ID <br/>
            <input class="form-control" type="number" name="delivery_id" /><br/>
            Payment Method ID <br/>
            <input class="form-control" type="number" name="payment_method_id" /><br/>
            Flower ID <br/>
            <input class="form-control" type="number" name="flower_id" /><br/>
            <input type="submit" name="add" value="Add"/><br/>
        </form><br/>
        <center>
            <input type="button" class="btn btn-danger "
                   onclick="catalog(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
        </center>
    </div>
</center>

<?php

$link = mysqli_connect('localhost', 'root', '12345678');
$db_selected = mysqli_select_db( $link, 'flower_store');

if( isset( $_POST['add'] ) )
{
    $client_first_name = $_POST['client_first_name'];
    $client_second_name = $_POST['client_second_name'];
    $client_surname = $_POST['client_surname'];
    $city_id = $_POST['city_id'];
    $adress = $_POST['adress'];
    $delivery_id = $_POST['delivery_id'];
    $payment_method_id = $_POST['payment_method_id'];
    $flower_id = $_POST['flower_id'];

    $query = "INSERT INTO client (client_first_name,client_second_name,client_surname,city_id,adress,delivery_id,payment_method_id,flower_id) VALUES('$client_first_name','$client_second_name','$client_surname','$city_id','$adress','$delivery_id','$payment_method_id','$flower_id')";
    $result = mysqli_query($link, $query);
    echo "<script>alert(\"Успешно добавлена!\");</script>";

}



?>


</body>
</html>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="data.css">
    <meta charset="utf-8">
    <title>Change VIP's data</title>
    <script type="text/javascript">
        function home(form){
            window.location = "http://localhost/Flower_store/catalog/ordertable.php";
        }
    </script>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '12345678');
$db_selected = mysqli_select_db( $link, 'flower_store');

$client_id = $_GET['id'];
$q = "SELECT * FROM client WHERE client_id='$client_id'";
$result = mysqli_query($link,$q);

$row = mysqli_fetch_array($result);

if(isset($_POST['save']))
{

    $client_first_name = strip_tags(trim($_POST['client_first_name']));
    $client_second_name = strip_tags(trim($_POST['client_second_name']));
    $client_surname = strip_tags(trim($_POST['client_surname']));
    $city_id = strip_tags(trim($_POST['city_id']));
    $adress = strip_tags(trim($_POST['adress']));
    $delivery_id = strip_tags(trim($_POST['delivery_id']));
    $payment_method_id = strip_tags(trim($_POST['payment_method_id']));
    $flower_id = strip_tags(trim($_POST['flower_id']));

    $query = "UPDATE client SET client_first_name='$client_first_name',client_second_name='$client_second_name',client_surname='$client_surname', city_id='$city_id',adress='$adress',delivery_id='$delivery_id',payment_method_id='$payment_method_id',flower_id='$flower_id' WHERE client_id='$client_id'";
    mysqli_query($link,$query);

}
?>
<center>
    <div id="login_container">
        <form method="post" action="orderedit.php?id=<?php echo $client_id;?>">
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
            <input type="submit" name="save" value="Save"/>
        </form><br/>
        <input type="button" class="btn btn-warning "
               onclick="home(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
    </div>
</center>
</body>
</html>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="catalog.css">
    <meta charset="utf-8">
    <title>Order</title>
    <script type="text/javascript">
        function order(form){
            window.location = "http://localhost/Flower_store/catalog/orderdata.php";
        }
        function home(form){
            window.location = "http://localhost/Flower_store/catalog/mainpage.html";
        }
    </script>
</head>
<body>
<center>
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="order(document.getElementById('form'))" name="submit" value="Add data" id="order" >
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="home(document.getElementById('form'))" name="submit" value="Home" id="home" >
</center>
<?php
$link = mysqli_connect('localhost', 'root', '12345678');
$db_selected = mysqli_select_db( $link, 'flower_store');
$query = "SELECT * FROM client";
$result = mysqli_query($link,$query);


while($row = mysqli_fetch_array($result))
{?>
    <center>

        <table class="table" >
            <thead>
            <tr>
                <th></th>
                <th>Client_first_name</th>
                <th>Client_second_name</th>
                <th>Client_surname</th>
                <th>City_id</th>
                <th>Adress</th>
                <th>Delivery_id</th>
                <th>Payment_method_id</th>
                <th>Flower_id</th>
                <th>***</th>
                <th>***</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $row[' ']?></th>
                <td><?php echo $row['client_first_name']?></td>
                <td><?php echo $row['client_second_name']?></td>
                <td><?php echo $row['client_surname']?></td>
                <td><?php echo $row['city_id']?></td>
                <td><?php echo $row['adress']?></td>
                <td><?php echo $row['delivery_id']?></td>
                <td><?php echo $row['payment_method_id']?></td>
                <td><?php echo $row['flower_id']?></td>
                <td><a href="orderedit.php?id=<?php echo $row['client_id']?>">Change</a></td>
                <td><a href="orderdelete.php?id=<?php echo $row['client_id']?>">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </center>
<?php }?>
</body>
</html>


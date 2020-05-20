<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="delete.css">
    <meta charset="utf-8">
    <title>Delete data</title>
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
$query = "DELETE FROM client WHERE client_id='$client_id'";
mysqli_query($link, $query);

?>
<center>
    <h3>This information was deleted</h3>
    <input type="button" class="btn btn-outline-warning btn-lg"
           onclick="home(document.getElementById('form'))" name="submit" value="Turn back" id="home" >

</center>
</body>
</html>
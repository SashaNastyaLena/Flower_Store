<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="supdelete.css">
    <meta charset="utf-8">
    <title>Delete data</title>
    <script type="text/javascript">
        function home(form){
            window.location = "http://localhost/flower/suppliers/suptable.php";
        }
    </script>
</head>
<body>
<?php

$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');

$provider_id = $_GET['id'];
$query = "DELETE FROM provider WHERE provider_id='$provider_id'";
mysqli_query($link, $query);

?>
<center>
    <h3>This information was deleted</h3>
    <input type="button" class="btn btn-outline-danger btn-lg"
           onclick="home(document.getElementById('form'))" name="submit" value="Turn back" id="home" >

</center>
</body>
</html>
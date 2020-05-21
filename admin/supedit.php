<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="supdata.css">
    <meta charset="utf-8">
    <title>Change VIP's data</title>
    <script type="text/javascript">
        function supply(form){
            window.location = "http://localhost/flower/suppliers/suptable.php";
        }
    </script>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');

$provider_id = $_GET['id'];
$q = "SELECT provider_name, country, phone FROM provider WHERE provider_id='provider_id'";
$result = mysqli_query($link,$q);

$row = mysqli_fetch_array($result);

if(isset($_POST['save']))
{

    $provider_name = strip_tags(trim($_POST['provider_name']));
    $country = strip_tags(trim($_POST['country']));
    $phone = strip_tags(trim($_POST['phone']));
    $query = "UPDATE provider SET provider_name='$provider_name',country='$country', phone='$phone' WHERE provider_id='$provider_id'";
    mysqli_query($link,$query);


}
?>
<center>
    <div id="login_container">
        <form method="post" action="supedit.php?id=<?php echo $provider_id;?>">
            Provider name  <br/>
            <input class="form-control" type="text" name="provider_name"/>
            Country <br/>
            <input class="form-control" type="text" name="country" /><br/>
            Phone <br/>
            <input class="form-control" type="text" name="phone" /><br/>
            <input type="submit" name="save" value="Save"/>
        </form><br/>
        <input type="button" class="btn btn-warning "
               onclick="supply(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
    </div>
</center>
</body>
</html>
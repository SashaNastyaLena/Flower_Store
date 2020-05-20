<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="data.css">
    <meta charset="utf-8">
    <title>Change VIP's data</title>
    <script type="text/javascript">
        function catalog(form){
            window.location = "http://localhost/flower/catalog/cattable.php";
        }
    </script>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');

$flower_id = $_GET['id'];
$q = "SELECT category_id, flower_name, price, is_available, provider_id  FROM flower_catalog WHERE flower_id='$flower_id'";
$result = mysqli_query($link,$q);

$row = mysqli_fetch_array($result);

if(isset($_POST['save']))
{

    $category_id = strip_tags(trim($_POST['category_id']));
    $flower_name = strip_tags(trim($_POST['flower_name']));
    $price = strip_tags(trim($_POST['price']));
    $is_available = strip_tags(trim($_POST['is_available']));
    $provider_id = strip_tags(trim($_POST['provider_id']));
    $query = "UPDATE flower_catalog SET category_id='$category_id',flower_name='$flower_name',price='$price', is_available='$is_available',provider_id='$provider_id' WHERE flower_id='$flower_id'";
    mysqli_query($link,$query);


}
?>
<center>
    <div id="login_container">
        <form method="post" action="catedit.php?id=<?php echo $flower_id;?>">
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
            <input type="submit" name="save" value="Save"/>
        </form><br/>
        <input type="button" class="btn btn-warning "
               onclick="catalog(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
    </div>
</center>
</body>
</html>
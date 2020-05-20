<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="catalog.css">
    <meta charset="utf-8">
    <title>Catalog</title>
    <script type="text/javascript">
        function catalog(form){
            window.location = "http://localhost/flower/catalog/catdata.php";
        }
        function home(form){
            window.location = "http://localhost/flower/mainpage.html";
        }
    </script>
</head>
<body>
<center>
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="catalog(document.getElementById('form'))" name="submit" value="Add data" id="catalog" >
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="home(document.getElementById('form'))" name="submit" value="Home" id="home" >
</center>
<?php
$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');
$query = "SELECT flower_id, category_id, flower_name, price, is_available, provider_id FROM flower_catalog";
$result = mysqli_query($link,$query);


while($row = mysqli_fetch_array($result))
{?>
    <center>

        <table class="table" >
            <thead>
            <tr>
                <th></th>
                <th>Category_id</th>
                <th>Flower_name</th>
                <th>Price</th>
                <th>Is_available</th>
                <th>Provider_id</th>
                <th>***</th>
                <th>***</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $row[' ']?></th>
                <td><?php echo $row['category_id']?></td>
                <td><?php echo $row['flower_name']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['is_available']?></td>
                <td><?php echo $row['provider_id']?></td>
                <td><a href="catedit.php?id=<?php echo $row['flower_id']?>">Change</a></td>
                <td><a href="catdelete.php?id=<?php echo $row['flower_id']?>">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </center>
<?php }?>
</body>
</html>

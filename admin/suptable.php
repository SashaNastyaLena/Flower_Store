<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="suppliers.css">
    <meta charset="utf-8">
    <title>Comments</title>
    <script type="text/javascript">
        function supply(form){
            window.location = "http://localhost/flower/suppliers/supdata.php";
        }
        function home(form){
            window.location = "http://localhost/flower/mainpage.html";
        }
    </script>
</head>
<body>
<center>
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="supply(document.getElementById('form'))" name="submit" value="Add data" id="supply" >
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="home(document.getElementById('form'))" name="submit" value="Home" id="home" >
</center>
<?php
$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');
$query = "SELECT provider_id, provider_name, country, phone FROM provider";
$result = mysqli_query($link,$query);


while($row = mysqli_fetch_array($result))
{?>
    <center>

        <table class="table" >
            <thead>
            <tr>
                <td></td>
                <th>Provider name</th>
                <th>Country </th>
                <th>Phone</th>
                <th>***</th>
                <th>***</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $row[' ']?></th>
                <td><?php echo $row['provider_name']?></td>
                <td><?php echo $row['country']?></td>
                <td><?php echo $row['phone']?></td>
                <td><a href="supedit.php?id=<?php echo $row['provider_id']?>">Change</a></td>
                <td><a href="supdelete.php?id=<?php echo $row['provider_id']?>">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </center>
<?php }?>
</body>
</html>

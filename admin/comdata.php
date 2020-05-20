<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="comdata.css">
    <meta charset="utf-8">
    <title>Enter data</title>
    <script type="text/javascript">
        function comments(form){
            window.location = "http://localhost/flower/comments/comtable.php";
        }
    </script>
</head>
<body>
<center>
    <div id="login_container">
        <form method="post" action="comdata.php">
            Commenter name  <br/>
            <input class="form-control" type="text" name="commenter_name"/>
            Comment text <br/>
            <input class="form-control" type="text" name="comment_text" /><br/>
            <input type="submit" name="add" value="Add"/><br/>
        </form><br/>
        <center>
            <input type="button" class="btn btn-danger "
                   onclick="comments(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
        </center>
    </div>
</center>

<?php

$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');

if( isset( $_POST['add'] ) )
{
    $commenter_name = $_POST['commenter_name'];
    $comment_text = $_POST['comment_text'];

    $query = "INSERT INTO comments (commenter_name,comment_text) VALUES('$commenter_name','$comment_text')";
    $result = mysqli_query($link, $query);
//    echo "<script>alert(\"Успешно добавлена!\");</script>";

}



?>


</body>
</html>

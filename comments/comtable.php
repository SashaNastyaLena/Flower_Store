<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="comments.css">
    <meta charset="utf-8">
    <title>Comments</title>
    <script type="text/javascript">
        function comments(form){
            window.location = "http://localhost/flower/comments/comdata.php";
        }
        function home(form){
            window.location = "http://localhost/flower/mainpage.html";
        }
    </script>
</head>
<body>
<center>
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="comments(document.getElementById('form'))" name="submit" value="Add data" id="comments" >
    <input type="button" class="btn btn-outline-dark btn-lg btn-block" onclick="home(document.getElementById('form'))" name="submit" value="Home" id="home" >
</center>
<?php
$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');
$query = "SELECT comments_id, commenter_name, comment_text FROM comments";
$result = mysqli_query($link,$query);


while($row = mysqli_fetch_array($result))
{?>
    <center>

        <table class="table" >
            <thead>
            <tr>
                <td></td>
                <th>Commenter name</th>
                <th>Comment text</th>
                <th>***</th>
                <th>***</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $row[' ']?></th>
                <td><?php echo $row['commenter_name']?></td>
                <td><?php echo $row['comment_text']?></td>

                <td><a href="comedit.php?id=<?php echo $row['comments_id']?>">Change</a></td>
                <td><a href="comdelete.php?id=<?php echo $row['comments_id']?>">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </center>
<?php }?>
</body>
</html>

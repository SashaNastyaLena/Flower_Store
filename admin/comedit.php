<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="comdata.css">
    <meta charset="utf-8">
    <title>Change VIP's data</title>
    <script type="text/javascript">
        function comments(form){
            window.location = "http://localhost/flower/comments/comtable.php";
        }
    </script>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '');
$db_selected = mysqli_select_db( $link, 'flower_store');

$comments_id = $_GET['id'];
$q = "SELECT commenter_name, comment_text FROM comments WHERE comments_id='$comments_id'";
$result = mysqli_query($link,$q);

$row = mysqli_fetch_array($result);

if(isset($_POST['save']))
{

    $commenter_name = strip_tags(trim($_POST['commenter_name']));
    $comment_text = strip_tags(trim($_POST['comment_text']));
    $query = "UPDATE comments SET commenter_name='$commenter_name',comment_text='$comment_text' WHERE comments_id='$comments_id'";
    mysqli_query($link,$query);


}
?>
<center>
    <div id="login_container">
        <form method="post" action="comedit.php?id=<?php echo $comments_id;?>">
            Commenter name  <br/>
            <input class="form-control" type="text" name="commenter_name"/>
            Comment text <br/>
            <input class="form-control" type="text" name="comment_text" /><br/>
            <input type="submit" name="save" value="Save"/>
        </form><br/>
        <input type="button" class="btn btn-warning "
               onclick="comments(document.getElementById('form'))" name="submit" value="Turn back" id="home" >
    </div>
</center>
</body>
</html>
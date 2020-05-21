<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flower.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>order</title>
</head>
<body>
    <style>
        body{
            height:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('img/com.jpg') center no-repeat;

        }
        .review_box{
            font-size: larger;
            
            
            width: 500px;
            border: 2px solid #FAD4D9;
            border-radius: 15px;
            padding: 30px;
            background-color: #FFFEFE;
            box-shadow: 0 0 40px #FAD4D9;
        }
        .review_box__btn{
        
            padding: 5px 10px;
            border: 2px solid #FAD4D9;
            border-radius: 10px;
            background-color: #FFFEFE;
            box-shadow: 0 0 10px #FAD4D9;
            
        }
        .button{
            display: flex;
            justify-content: space-between;
        }

        </style>
    <div class="review_box">
        <form  method="post">
            <p>Name:</p>
            <p><input type="text" name="name" id="name__review" size="65"></p>
            <p>Review:</p>
            <p><textarea id="review__text" name="text" rows="10" cols="67" ></textarea></p>
            <div class="button"> 
                <button class="button" id="review_box__btnl" name='addReview'>submit</button>
                <button class="button" id="review_box__btnr"  name="cancel">return</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include 'conection_bd.php';
 
if( isset( $_POST['addReview'] ) )
    {	
        $name = $_POST['name'];
        $text = $_POST['text'];
     if($text && $name){
        $query = "INSERT INTO comments(commenter_name, comment_text) VALUES('$name','$text')";
		$query_note = mysqli_query($link, $query);
		mysql_close($link); 
		echo '<script> window.location = "http://localhost/flower/main.php"; </script> ';
     }else{
        echo '<script> alert("Empty fields") </script> ';
     }
    }
    else{
        if( isset( $_POST['cancel'] ) ){
            header("Location: http://localhost/flower/main.php");
        }
    }
?>
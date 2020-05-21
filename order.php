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
           
<header>
    <div class="containers">
        <nav>
            <ul class="menu">
            <li><a href="main.php">Main</a></li>	
            <li><a href="categories.php">Categories</a></li>	
            <li><a href="about.html">About us</a></li>	
            <li><a href="photogallery.html">Photogallery</a></li>	
            <li><a href="contact.html">Contact us</a></li>		
            </ul>
        </nav>
    </div>
</header>
<main>
    <div class="containers order main_blocks">
        <div class="form"> 
             <form   method="post">
                <p>First name: <input size="26" type="text" name="first_name"></p>
                <p>Second  name: <input size="22" type="text" name="second_name"></p>
                <p>Surname: <input size="28" type="text" name="surname"></p>
                <p>Adress: <input size="30" type="text" name="adress"></p>
                 <p>City: <select  name="city">
                 <?php 
                 include 'conection_bd.php';
 
                    $query = "SELECT * FROM city"; 
                    $result = mysqli_query ($link, $query);  
                    while ($payment = mysqli_fetch_array($result)){ 
                        echo '<option value="'.$payment['city_id'].'">'.$payment['city'].'</option>';                  
                    }  
                ?> </select></p>
               
                <p>Delivery: <select name="delivery">
                <?php  
      
                    $query = "SELECT * FROM delivery"; 
                    $result = mysqli_query ($link, $query);  
                    while ($payment = mysqli_fetch_array($result)){ 
                            echo '<option value="'.$payment['delivery_id'].'">'.$payment['delivery_method'].'</option>';                  
                    }  ?>   
                </select></p>
                <p>Payment: <select name = "payment" >              
                <?php  
                    $query = "SELECT * FROM payment_method"; 
                    $result = mysqli_query ($link, $query);  
                    while ($payment = mysqli_fetch_array($result)){ 
                            echo '<option value="'.$payment['payment_method_id'].'">'.$payment['payment_method'].'</option>';                  
                    }  
                ?> </select></p>

                <button type="submit" name="add"  class="order_button">Make order</button>
             </form>
        </div>

        <section>
            <div class="category">
                <?php 
                   
                    $id = $_GET['order']; 
                    $query = "SELECT * FROM flower_catalog WHERE flower_id=$id"; 
                    $result = mysqli_query ($link, $query);  
                    $note = mysqli_fetch_array($result);
                    echo '<div class="order_box">';
                    echo "<img class='order_img' src=".$note['img_src']." alt='tulips'>";
                    echo "<h3 class='order_title'>".$note['flower_name']."</h3>";
                    echo '<p class="price">'.$note['price'].'$</p>';
                    echo '</div>';
                
                ?> 
            </div>
        </section>



    </div>
</main>

<footer>
		<div class="content footer">
			<div class="footer__left">
				 
					<ul class="menu">
						<li><a href="categories.php">Categories</a></li>	
						<li><a href="about.html">About us</a></li>	
						<li><a href="photogallery.html">Photogallery</a></li>	
						<li><a href="contact.html">Contact us</a></li>	
					</ul>
				 
			</div>
			<div class="footer__right">
				<i class="fab fa-instagram-square"></i>
				<i class="fab fa-facebook-square"></i>
				<i class="far fa-envelope"></i>
				<i class="fab fa-telegram-plane"></i>
			 
			</div>			

		</div>
    </footer>
    
</body>
</html> 
<?php
 
if( isset( $_POST['add'] ) )
    {	
        $name = $_POST['first_name'];
        $second_name = $_POST['second_name'];
        $city = $_POST['city'];
        $delivery = $_POST['delivery'];
        $payment = $_POST['payment'];
        $adress = $_POST['adress'];
        $surname = $_POST['surname'];
        
      if($name && $second_name && $city && $delivery && $payment && $adress && $surname){
            $query = "INSERT INTO client(client_first_name,client_second_name, client_surname, city_id, adress, delivery_id,
            payment_method_id, flower_id) VALUES('$name','$second_name', '$surname', '$city','$adress', '$delivery', '$payment', '$id' )";
            $query_note = mysqli_query($link, $query);
            header("Location: http://localhost/php/main.php"); 
      }  
        
    else{
        echo '<script> alert("Empty fields") </script> ';
     }
       
    }
  
?>
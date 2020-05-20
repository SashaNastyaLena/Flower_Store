<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flower.css">
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
    <div class="containers main_blocks">
        <aside>
            <h2 class="categories_title">
                Categories
            </h2>
            <ul class="categories_list">
                <li><a href="category.php?category=<?php echo '1'; ?>">Tulips</a></li>
                <li><a href="category.php?category=<?php echo '3'; ?>"> Wedding bouquets</a></li>
                <li><a href="category.php?category=<?php echo '2'; ?>"> Roses</a></li>
                <li><a href="category.php?category=<?php echo '4'; ?>"> Flowers</a></li>
                <li><a href="category.php?category=<?php echo '5'; ?>">Flowers box</a></li>
    
            </ul>
        </aside>

        <section>
            <div class="category"> 

<?php 

    include 'conection_bd.php';

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

        <section>
           <div class="form"> 
             <form action="addorder.php" method="post">
                <p>First name: <input type="text" name="first_name"></p>
                <p>Second name: <input type="text" name="second_name"></p>
                <p>City: <select name="city">
                 <?php 
                    $query = "SELECT * FROM city"; 
                    $result = mysqli_query ($link, $query);  
                    while ($payment = mysqli_fetch_array($result)){ 
                        echo '<option value="'.$payment['city_id'].'">'.$payment['city'].'</option>';                  
                    }  
                ?> </select></p>
                <p>Adress: <input type="text" name="adress"></p>
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

                <input type="submit" name="add" value="Add">

             </form>
            </div>


            
      
        </section>

    </div>
</main>

</body>
</html> 
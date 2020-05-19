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
                <li><a href="category.php?category=<?php echo 'tulips'; ?>">Tulips</a></li>
                <li><a href="category.php?category=<?php echo 'wedding'; ?>"> Wedding bouquets</a></li>
                <li><a href="category.php?category=<?php echo 'roses'; ?>"> Roses</a></li>
                <li><a href="category.php?category=<?php echo 'flowers'; ?>"> Flowers</a></li>
                <li><a href="category.php?category=<?php echo 'box'; ?>">Flowers box</a></li>
    
            </ul>
        </aside>

        <section>
            <div class="category"> 

<?php 
// include 'conection_bd.php';
// include 'checkProduct.php';

 


?>
  </div>
        </section>
    </div>
</main>

</body>
</html>
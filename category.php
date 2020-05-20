<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flower.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Document</title>
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
            <h2 class="categories_title">Categories</h2>
            <ul class="categories_list">
                <li><a href="category.php?category=<?php echo '1'; ?>">Tulips</a></li>
                <li><a href="category.php?category=<?php echo '3'; ?>"> Wedding bouquets</a></li>
                <li><a href="category.php?category=<?php echo '2'; ?>"> Roses</a></li>
                <li><a href="category.php?category=<?php echo '4'; ?>"> Flowers</a></li>
                <li><a href="category.php?category=<?php echo '5'; ?>">Flowers box</a></li>
            </ul>
        
            <div class="aside_box">
                <div class="aside_title">Information</div>
                <img class="aside_img" src="img/Daisy-Meadow-Bride-Bouquet.jpg">
                 
                <a href="main.php" class="aside_btn"> Main page</a >
            </div>
    
            <div class="aside_box">
                <div class="aside_title">Photogallery</div>
                <img class="aside_img" src="img/photogallery.jpg"> 
                <a href="photogallery.html"  class="aside_btn">All photo</a>
            </div>
            </aside>
            
        
        <section>
            <div class="category"> 
<?php 
include 'conection_bd.php';
include 'checkProduct.php';
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
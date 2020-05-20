<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flower.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
   
    <title>Flower</title>
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
                    <div class="category_title">
                        <h2>Tulips <a href="category.php?category=<?php echo '1'; ?>"><i class="fas fa-angle-double-right"></i> </a> </h2>
                        
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Heartfelt.jpg" alt="Tulips">
                            <h3 id="name">Heartfelt</h3>
                            <p id="price">69.99 $</p>
                            <a class="order_btn" href="order.php?order=1">ORDER</a>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/All_the_Rage.jpg" alt="Tulips">
                            <h3 id="name">All the Rage"</h3>
                            <p id="price">45.00 $</p>
                            <a class="order_btn" href="order.php?order=2">ORDER</a>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Tiger.jpg" alt="Tulips">
                            <h3 id="name">Tiger</h3>
                            <p id="price">54.50 $</p>  
                            <a class="order_btn" href="order.php?order=3">ORDER</a>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Wedding bouquets  <a href="category.php?category=<?php echo '3'; ?>"><i class="fas fa-angle-double-right"></i> </a></h2>
                   
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Double_the_Buttercream.jpg" alt="Wedding bouquets">
                            <h3 id="name">Double the Buttercream</h3>
                            <p id="price">79.00 $</p>
                            <a class="order_btn" href="order.php?order=15">ORDER</a>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Double_the_Unicorn.jpg" alt="Wedding bouquets">
                            <h3 id="name">Double the Unicorn</h3>
                            <p id="price">85.99 $</p>
                            <a class="order_btn" href="order.php?order=16">ORDER</a>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Muse.jpg" alt="Wedding bouquets">
                            <h3 id="name">Muse</h3>
                            <p id="price">150.00 $</p>  
                            <a class="order_btn" href="order.php?order=17">ORDER</a>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Roses  <a href="category.php?category=<?php echo '2'; ?>"><i class="fas fa-angle-double-right"></i> </a></h2>
                        
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Buttercream.jpg" alt="Roses">
                            <h3 id="name">Buttercream</h3>
                            <p id="price">65.00 $</p>
                            <a class="order_btn" href="order.php?order=7">ORDER</a>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Santorini.jpg" alt="Roses">
                            <h3 id="name">Santorini</h3>
                            <p id="price">52.00 $</p>
                            <a class="order_btn" href="order.php?order=8">ORDER</a>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Nonna.jpg" alt="Roses">
                            <h3 id="name">Nonna</h3>
                            <p id="price">70.85 $</p>
                            <a class="order_btn" href="order.php?order=9">ORDER</a>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Flowers  <a href="category.php?category=<?php echo '4'; ?>"><i class="fas fa-angle-double-right"></i> </a></h2>
                       
                   
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Luna.jpg" alt="Flowers">
                            <h3 id="name">Luna</h3>
                            <p id="price">65.70 $</p>
                            <a class="order_btn" href="order.php?order=24">ORDER</a>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Juliet.jpg" alt="Flowers">
                            <h3 id="name">Juliet</h3>
                            <p id="price">64.99 $</p>
                            <a class="order_btn" href="order.php?order=25">ORDER</a>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Regatta.jpg" alt="Flowers">
                            <h3 id="name">Regatta</h3>
                            <p id="price">130.00 $</p>
                            <a class="order_btn" href="order.php?order=26">ORDER</a>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Flowers box  <a href="category.php?category=<?php echo '5'; ?>"><i class="fas fa-angle-double-right"></i> </a></h2>
                        
                    
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Red_and_Blush.jpg" alt="Flowers box">
                            <h3 id="name">Red and Blush</h3>
                            <p id="price">40.00 $</p>
                            <a class="order_btn" href="order.php?order=31">ORDER</a>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Blooming_Song.jpg" alt="Flowers box">
                            <h3 id="name">Blooming Song</h3>
                            <p id="price">64.99 $</p>
                            <a class="order_btn" href="order.php?order=32">ORDER</a>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Pinky.jpg" alt="Flowers box">
                            <h3 id="name">Pinky</h3>
                            <p id="price">78.95 $</p>
                            <a class="order_btn" href="order.php?order=33">ORDER</a>
                        </div>
                    </div>
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
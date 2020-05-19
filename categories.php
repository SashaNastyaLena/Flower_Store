<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flower.css">
   
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
                    <li><a href="category.php?category=<?php echo '1'; ?>"> Tulips </a></li>
                    <li><a href="category.php?category=<?php echo '3'; ?>"> Wedding bouquets </a></li>
                    <li><a href="category.php?category=<?php echo '2'; ?>"> Roses </a></li>
                    <li><a href="category.php?category=<?php echo '4'; ?>"> Flowers </a></li>
                    <li><a href="category.php?category=<?php echo '5'; ?>"> Flowers box </a></li>
        
                </ul>
            </aside>
            <section>
                <div class="category">
                    <div class="category_title">
                        <h2>Tulips</h2>
                        <a href="category.php?category=<?php echo '1'; ?>">more</a>
                    </div>
                 


                    
            <!-- Вместо button ->  <a class="order_btn" href="order.php?order=   id   ">ORDER</a>   вместо id  =   id  цветка  -->
                       
                 
                 
                 
                    <div class="category_block">
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Heartfelt.jpg" alt="Tulips">
                            <h3 id="name">Heartfelt</h3>
                            <p id="price">69.99 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/All_the_Rage.jpg" alt="Tulips">
                            <h3 id="name">All the Rage"</h3>
                            <p id="price">45.00 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Tiger.jpg" alt="Tulips">
                            <h3 id="name">Tiger</h3>
                            <p id="price">54.50 $</p>  
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Wedding bouquets</h2>
                        <a href="category.php?category=<?php echo '3'; ?>">more</a>
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Double_the_Buttercream.jpg" alt="Wedding bouquets">
                            <h3 id="name">Double the Buttercream</h3>
                            <p id="price">79.00 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Double_the_Unicorn.jpg" alt="Wedding bouquets">
                            <h3 id="name">Double the Unicorn</h3>
                            <p id="price">85.99 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                            <img id="img" src="flower_catalog/Muse.jpg" alt="Wedding bouquets">
                            <h3 id="name">Muse</h3>
                            <p id="price">150.00 $</p>  
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Roses</h2>
                        <a href="category.php?category=<?php echo '2'; ?>"> more</a>
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Buttercream.jpg" alt="Roses">
                            <h3 id="name">Buttercream</h3>
                            <p id="price">65.00 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Santorini.jpg" alt="Roses">
                            <h3 id="name">Santorini</h3>
                            <p id="price">52.00 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Nonna.jpg" alt="Roses">
                            <h3 id="name">Nonna</h3>
                            <p id="price">70.85 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Flowers</h2>
                        <a href="category.php?category=<?php echo '4'; ?>"> more</a>
                   
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Luna.jpg" alt="Flowers">
                            <h3 id="name">Luna</h3>
                            <p id="price">65.70 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Juliet.jpg" alt="Flowers">
                            <h3 id="name">Juliet</h3>
                            <p id="price">64.99 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Regatta.jpg" alt="Flowers">
                            <h3 id="name">Regatta</h3>
                            <p id="price">130.00 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Flowers box</h2>
                        
                    <a href="category.php?category=<?php echo '5'; ?>">more</a>
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Red_and_Blush.jpg" alt="Flowers box">
                            <h3 id="name">Red and Blush</h3>
                            <p id="price">40.00 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Blooming_Song.jpg" alt="Flowers box">
                            <h3 id="name">Blooming Song</h3>
                            <p id="price">64.99 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="flower_catalog/Pinky.jpg" alt="Flowers box">
                            <h3 id="name">Pinky</h3>
                            <p id="price">78.95 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="containers">

        </div>
    </footer>
     
    <script src="addToOrder.js"></script>
    
 

</body>
</html>
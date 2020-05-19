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
                        <a href="category.php?category=<?php echo 'tulips'; ?>">more</a>
                    </div>
                 


                    
            <!-- Вместо button ->  <a class="order_btn" href="order.php?order=   id   ">ORDER</a>   вместо id  =   id  цветка  -->
                       
                 
                 
                 
                    <div class="category_block">
                        <div class="category_box">
                            <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <a class="order_btn" href="order.php?order=   id   ">ORDER</a>
                        </div>
                        <div class="category_box">
                            <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                            <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>  
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Tulips</h2>
                        <a href="category.php?category=<?php echo 'wedding'; ?>">more</a>
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                            <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                            <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                            <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>  
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Tulips</h2>
                        <a href="category.php?category=<?php echo 'roses'; ?>"> more</a>
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Tulips</h2>
                        <li><a href="category.php?category=<?php echo 'flowers'; ?>"> more</a></li>
                   
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                    </div>
                 </div>
                 <div class="category">
                    <div class="category_title">
                        <h2>Tulips</h2>
                        
                    <li><a href="category.php?category=<?php echo 'box'; ?>">more</a></li>
                    </div>
                    <div class="category_block">
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
                            <button onclick="addToOrder()" class="order_btn">ORDER</button>
                        </div>
                        <div class="category_box">
                        <img id="img" src="img/tulips_1.jpg" alt="tulips">
                            <h3 id="name">Bouquet "Сolorful splashes"</h3>
                            <p id="price">48 $</p>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flower.css">
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
include 'conection_bd.php';

$categ = $_GET['category']; 
$query = "SELECT * FROM flower_catalog WHERE flower_category='$categ'"; 
$result = mysqli_query ($link, $query);  
if($result) {
    echo '<div class="category_block">'; 
    while ($note = mysqli_fetch_array($result)){ 
        echo '<div class="category_box">';
        echo "<img src=".$note['img_src']." alt='tulips'>";
        echo "<h3>".$note['flower_name']."</h3>";
        echo '<p class="price">'.$note['price'].'$</p>';
        echo '<a id="order_btn" href="preview.php?preview='.$note['flower_id'].'">ORDER</a>';
        echo  '</div>';
    }    
}
    mysqli_close($link);
 ?>
  </div>
        </section>
    </div>
</main>

</body>
</html>
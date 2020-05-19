<?php
$categ = $_GET['category']; 
$query = "SELECT * FROM flower_catalog WHERE flower_category='$categ'"; 
$result = mysqli_query ($link, $query);  

if($result) {
    echo '<div class="category_block">'; 
    while ($note = mysqli_fetch_array($result)){ 
        echo '<div class="category_box">';
        echo "<img id='img' src=".$note['img_src']." alt='tulips'>";
        echo "<h3 id='name'>".$note['flower_name']."</h3>";
        echo '<p id="price" >'.$note['price'].'$</p>';
        echo '<button onclick="addToOrder(this)" class="order_btn" id="'.$note['flower_id'].'">ORDER</button>';
        echo '</div>';
    }    
}   echo '</div>'; 
    mysqli_close($link);
    ?>
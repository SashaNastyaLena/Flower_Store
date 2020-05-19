<?php
$categ = $_GET['category']; 
$query = "SELECT * FROM flower_catalog WHERE flower_category='$categ'"; 
$result = mysqli_query ($link, $query);  

if($result) {
    echo '<div class="category_block">'; 
    while ($note = mysqli_fetch_array($result)){ 
        echo '<div class="category_box">';
        echo "<img src=".$note['img_src']." alt='tulips'>";
        echo "<h3>".$note['flower_name']."</h3>";
        echo '<p>'.$note['price'].'$</p>';
        echo '<a class="order_btn" href="order.php?order=>'.$note['flower_id'].'">ORDER</a>';
        echo '</div>';
    }    
}   echo '</div>'; 
    mysqli_close($link);
    ?>
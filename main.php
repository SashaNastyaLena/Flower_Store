<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Flowers</title>
</head>
<body>
	<header>
		<nav class="container">
			<ul class="menu">
				<li><a href="categories.php">Categories</a></li>	
				<li><a href="about.html">About us</a></li>	
				<li><a href="photogallery.html">Photogallery</a></li>	
				<li><a href="contact.html">Contact us</a></li>	
			</ul>
		</nav>
	<div class="main">
		<div class="title">
			<h1 style="margin-bottom: 30px;"><span class="title__1">Flowers</span> <br>For Your Heart</h1>
			<a href="categories.php" class="main-btn" style="text-decoration: none; margin-top:10px">Take for yourself</a>
		</div>
	</div>
		
	</header>
 
	<section >
		<div class="content">
			<h2 class="content__title">WHAT WE PROPOPSE</h2>
		
			<div class="propose">
				<img src="img/1.jpg" style="width: 400px; height:400px;">
				<div class="propose__cont">
					<div class="number"><hr ><span class="num">01</span><hr></div> 
					<h2>BIRTHDAY FLOWERS</h2>
					<p class="propose__text" > 
						Birthday flowers delivered make wonderful surprises, so if you're looking for a beautiful birthday
						gift, we hope we can inspire you with these - our best selling birthday flower bouquets. 
						Order birthday flowers online today and make their birthday a day to remember. 
						Not sure what to write in your card? Take a look at our Birthday card message ideas for some inspiration.</p>
				</div>
			
			</div>
			<div class="propose propose__cont2">
				<div class="propose__cont ">
					<div class="number"><hr ><span class="num">02</span><hr></div> 
					<h2>WEDDING FLOWERS</h2>
					<p class="propose__text">  
						Looking for 144 roses for your artificial red rose wedding bouquet? Worry not – in our collection of rose
						bouquets and single stems, you’ll find everything from traditional red roses to surrealistic artificial
						royal blue roses.  Planning to decorate your spring garden party table setting with artificial flowers
						in silver vases? For your spring fling, look no further than our tulip artificial flowers wedding
						bouquet floral arrangements from our lily, tulip & peony collection. </p>
				</div>
				<img src="img/2.jpg" style="width: 400px; height:400px;">
			</div>
			<img> 

			<div class="propose">
				<img src="img/3.jpg" style="width: 400px; height:400px;">
				<div class="propose__cont">
					<div class="number"><hr><span class="num">03</span><hr> </div>
					<h2>FLOWERS FOR ANY OCCASIONS</h2>
					<p  class="propose__text" >
						Over the years of our work in the delivery of flowers and gifts in Ukraine and the World,
						we have received a huge number of positive reviews from our customers.
						Flower delivery from Flowers.ua is always high quality and on time.
						In our store a wide variety of flowers, for every taste and color, for any occasion.
						Join us, you won't want to leave.</p>
				</div>
			</div>
		</div>
	</section>
 <section>
	<div class="content">
	<div class="wrapper">
		<h2 class="item">Flowers are not just a gift for any reason, it is another way to emphasize your uniqueness</h2>
		<div class="item1"><a href="category.php?category=<?php echo '3'; ?>"><img src="img/item6.PNG" ></a><h3>Wedding bouquets</h3></div>
		<div class="item2"><a href="category.php?category=<?php echo '1'; ?>"><img src="img/item2.PNG" ></a><h3>Tulips</h3></div>
		<div class="item3"><a href="category.php?category=<?php echo '4'; ?>"><img src="img/item3.PNG" ></a><h3>Flowers</h3></div>
		<div class="item5"><a href="category.php?category=<?php echo '2'; ?>"><img src="img/item4.PNG" ></a><h3>Roses</h3></div>
		<div class="item6"><a href="category.php?category=<?php echo '5'; ?>"><img src="img/item1.PNG" ></a><h3>Flowers box</h3></div>
		</div>
	</div>
 </section>

 <section>
	<div class="content">
		<h2 class="content__title">WHAT WE OFFER</h2>		
		<ul class="offer">
			<li>Own import: A large assortment of bulb plants and perennials that we ourselves import from Holland.</li>
			<li>Shopping safety: 100% guarantee on all plants. Refund if you are not happy with the purchase. More than 10 years in the market</li>
			<li>Flexible discount system. New bonus system</li>
			<li>Return money from each purchase. Very economical prices to most plants.</li>
			<li>We guarantee the conformity of the photo of the product and the grown plant.</li>
			<li>Proper storage conditions for you to receive quality products and seeds.</li>
		 
		</ul>	
	</div>
 </section>

 <section>
	<div class="content ">
		<h2 class="content__title">REVIEWS</h2>	
		
		<div id="reviews">
		<?php
		include 'conection_bd.php';
		$query = "SELECT * FROM comments"; 
		$result = mysqli_query ($link, $query);  
		if($result) {
			
			while ($note = mysqli_fetch_array($result)){ 
				echo '<div class="review">'; 
				echo "<p class='review__name'><b>".$note['commenter_name']."</b></p>";
				echo '<p>'.$note['comment_text'].'</p> ';
				echo '</div>';
			}    
		}   
			mysqli_close($link);
		?>	 
		</div>
		<button id="review__btn" onclick="reviewBox()" class="main-btn">Give us your feedback</button>
		</div>
		
	</section>



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

 <script>
	 function reviewBox(){
		window.location = 'http://localhost/php/addComment.php'
	} 
 
 </script>

 
<script>
 

</script>

</body>
</html> 
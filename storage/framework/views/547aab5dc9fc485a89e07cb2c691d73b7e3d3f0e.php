<title> South Point | The Grand Hotel </title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/navigation_bar.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/back_ground_image.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/availability_card.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/room_cards.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/gallery.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/contact_form.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/footer_icons.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/services.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/slide_show.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('https://www.w3schools.com/w3css/4/w3.css')); ?> " />
<link rel="stylesheet" type="text/css" href=" <?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')); ?> " />
<style type="text/css">
	body, html {
		height: 100%;
		font-family: Arial, Helvetica, sans-serif; 
		font-size: 12px;
	}
</style>
<body>
	<ul>
		<li><a href="#check_availabilty" style="font-size: 18px;"> Check Availability </a></li>
		<li><a href="#rooms" style="font-size: 18px;"> Rooms </a></li>
		<li><a href="#photos" style="font-size: 18px;"> Photos </a></li>
		<li><a href="#what_we_do" style="font-size: 18px;"> What We Do </a></li>
		<li><a href="#our_hotels" style="font-size: 18px;"> Our Hotels </a></li>
		<li><a href="#contact" style="font-size: 18px;"> Contact Us </a></li>
		<li><a href="#follow_us" style="font-size: 18px;"> Follow Us </a></li>
		<li style="float: right;"><a href="book_now.html" style="font-size: 18px;" target="_blank" title="Book a Hotel Room" > Book Now </a></li>
	</ul>
	
	<div class="w3-container w3-red">
		<p class="w3-xxxlarge"><a href="front_page.html" style="text-decoration: none;"> Hotel South Point </a></p>
	</div>

	<hr class="hrstyle" />

	<div class="bg" id="check_availabilty">
		<form class="container" action="get_data.php" method="POST">
			<h1>South Point</h1>
			<label for="check_in"><b> Check-In </b></label>
			<input type="date" placeholder="DD MM YYYY" name="check_in" required="required" />
			<label for="check_out"><b> Check-Out </b></label>
			<input type="date" placeholder="DD MM YYYY" name="check_out" required="required" />
			<label for="adult" min="0" max="6"><b> Adults </b></label>
			<input type="number" name="adults" placeholder="Enter the total number of adults" required="required" />
			<label for="kids" min="0" max="6"><b> Kids </b></label>
			<input type="number" name="kids" placeholder="Enter the total number of kids" required="required" /> <br />
			<button type="search" class="btn"> <a href="check_info.html" target="_blank" style="text-decoration: none;">Search</a> </button>
		</form>
	</div>

	<hr class="hrstyle" />
	<br />

	<div class="w3-container w3-red" id="rooms">
		<p style="font-size: 35px;"> Rooms </p>
		<p style="font-size: 20px;"> Make yourself at home is our slogan. We offer the best beds in the hotel and hospitality industry. Sleep well and rest well. </p>
	</div>
	<br />

	<div class="row">
		<div class="column">
			<br />
			<img src="single.jpeg" style="width: 100%"; />
    			<h4 style="text-align: left;"> Single Room </h4>
    			<p style="text-align: left;"> Starts from $299 </p>
    			<p style="text-align: left;"><img src="shower.png"><img src="phone.png"><img src="wifi.png"></p>
    		</div>

  		<div class="column">
			<br />
			<img src="double.jpeg" style="width: 100%;" />
    			<h4 style="text-align: left;">Double Room</h4>
    			<p style="text-align: left;">Starts from $499</p>
    			<p style="text-align: left;"><img src="shower.png"><img src="phone.png"><img src="wifi.png"><img src="tv.png"></p>
		</div>
  
		<div class="column">
			<br /> 
			<img src="duluxe.jpeg" style="width: 100%;" />
    			<h4 style="text-align: left;">Deluxe Room</h4>
    			<p style="text-align: left;">Starts from $699</p>
    			<p style="text-align: left;"><img src="shower.png"><img src="phone.png"><img src="wifi.png"><img src="tv.png"><img src="dine.png"></p>
		</div>
  
		<div class="column">
			   	<br />
			   	<img src="executive.jpeg" style="width: 100%;" />
      			<h4 style="text-align: left;">Executive Room</h4>
      			<p style="text-align: left;">Starts from $899</p>
      			<p style="text-align: left;"><img src="shower.png"><img src="phone.png"><img src="wifi.png"><img src="tv.png"><img src="wine_glass.png"><img src="dine.png"><img src="gaming.png"><img src="event.png"></p>	
  		</div>
	</div>

	<br />
	
	<hr class="hrstyle" />

	<div class="w3-container w3-red" id="photos">
		<p style="font-size: 35px;"> Photo grid of our prestigious hotel </p>
		<p style="font-size: 20px;"> Description about our hotel. </p>
	</div>

	<div class="gal_row">
		<div class="gal_column">
			<img src="aerial-shot-of-white-houses.jpeg" style="width: 100%;" />
			<img src="another-hotel.jpeg" style="width: 100%;" />
			<img src="bag-map.jpeg" style="width: 100%;" />
			<img src="beach-with-tents.jpeg" style="width: 100%;" />
			<img src="waiter.jpeg" style="width: 100%;" />
			<img src="water-slide.jpeg" style="width: 100%;" />
			<p style="width: 100%; background-color: #ffcccc"> Check </p>
		</div>
		<div class="gal_column">
			<img src="bubble-bath.jpeg" style="width: 100%;" />
			<img src="city-shot.jpeg" style="width: 100%;" />
			<img src="drone-shot-from-above-beach.jpg" style="width: 100%;" />
			<img src="eating-lounge.jpeg" style="width: 100%;" />
			<img src="tree-ceiling.jpg" style="width: 100%;" />
			<img src="water-tents.jpeg" style="width: 100%;" />
			<p style="width: 100%; background-color: #ffcccc"> Check </p>
		</div>
		<div class="gal_column">
			<img src="floaty.jpeg" style="width: 100%;" />
			<img src="hotel-sign.jpg" style="width: 100%;" />
			<img src="kid-with-floaties.jpg" style="width: 100%;" />
			<img src="more-furniture.jpeg" style="width: 100%;" />
			<img src="tables.jpeg" style="width: 100%;" />
			<img src="wedding-on-beach.jpeg" style="width: 100%;" />
		</div>
		<div class="gal_column">
			<img src="movie-sign.jpeg" style="width: 100%;" />
			<img src="napkin.jpeg" style="width: 100%;" />
			<img src="person-woman-hotel-laptop.jpg" style="width: 100%;" />
			<img src="skyline.jpg" style="width: 100%" />
			<img src="sunset.jpeg" style="width: 100%;" />
			<p style="width: 100%; background-color: #ffcccc"> Check </p>
		</div>
	</div>

	<hr class="hrstyle" />

	<div class="w3-container w3-red" id="what_we_do">
		<p style="font-size: 35px;"> What We Do </p>
		<p style="font-size: 20px;"> The following are the things that we love to do! </p>
	</div>

	<br />

	<div class="w3-container">
		<div class="w3-row">
			<div class="w3-col m4 w3-center">
				<img src="power.png" />
				<p style="font-size: 20px;"> Power </p>
				<p style="font-size: 18px;"> We strive to maintian high quality and brand. Consider our hotel to be best of the kind. </p>
			</div>
			
			<div class="w3-col m4 w3-center">
				<img src="heart.png" />
				<p style="font-size: 20px;"> Love </p>
				<p style="font-size: 18px;"> We love our customers they way people care for each other. </p>
			</div>
			
			<div class="w3-col m4 w3-center"> 
				<img src="lock.png" /> 
				<p style="font-size: 20px;"> Job Done </p>
				<p style="font-size: 18px;"> Forget you worries. We will do everything for you. </p>
			</div>
		</div>

		<br />

		<div class="w3-row">
			<div class="w3-col m4 w3-center"> 
				<img src="leaf.png" /> 
				<p style="font-size: 20px;"> Eco-friendly </p>
				<p style="font-size: 18px;"> Our Hotel supports the eco-tourism. </p>
			</div>

			<div class="w3-col m4 w3-center"> 
				<img src="certified.png" /> 
				<p style="font-size: 20px;"> Certified </p>
				<p style="font-size: 18px;"> We have a five start rating. And we have got that by hard work. </p>
			</div>

			<div class="w3-col m4 w3-center"> 
				<img src="spanner.png" /> 
				<p style="font-size: 20px;"> Hard Work </p>
				<p style="font-size: 18px;"> We strive for excellence. </p>
			</div>
		</div>
	</div>

	<hr class="hrstyle" />

	<div class="w3-container w3-red" id="our_hotels">
		<p style="font-size: 35px;"> Our Hotels </p>
		<p style="font-size: 20px;"> The following are the hotels we have worldwide! </p>
	</div>

	<br />

	<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext" style="font-size: 18px;">1 / 5</div>
			<img src="building1.jpg" style="width:100%">
			<div class="text" style="font-size: 18px;">Insert text 1</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext" style="font-size: 18px;">2 / 5</div>
			<img src="building2.jpg" style="width:100%">
			<div class="text" style="font-size: 18px;">Insert text 2</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext" style="font-size: 18px;">3 / 5</div>
			<img src="building3.jpg" style="width:100%">
			<div class="text" style="font-size: 18px;">Insert text 3</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext" style="font-size: 18px;">4 / 5</div>
			<img src="building4.jpg" style="width:100%">
			<div class="text" style="font-size: 18px;">Insert text 4</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext" style="font-size: 18px;">5 / 5</div>
			<img src="building5.jpg" style="width:100%">
			<div class="text" style="font-size: 18px;">Insert text 5</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	
	<br>

	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span> 
		<span class="dot" onclick="currentSlide(2)"></span> 
		<span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
		<span class="dot" onclick="currentSlide(5)"></span>
	</div>

	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			
			if (n > slides.length) {
				slideIndex = 1
			}
			
			if (n < 1) {
				slideIndex = slides.length
			}
			
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
		}
	</script>

	<hr class="hrstyle" />
	
	<div class="w3-container w3-red" id="contact">
		<p style="font-size: 35px;"> Contact Us </p>
		<p style="font-size: 18px;"> Drop us a message and let us know about your problems. We are always happy to help!!! </p>
	</div>

	<br />
	
	<div class="form-container" action="contact.php" method="POST">
		<form>
	    	<label for="fname" style="font-size: 18px;">First Name</label>
	    	<input type="text" id="fname" name="firstname" placeholder="Your name..">

	    	<label for="lname" style="font-size: 18px;">Last Name</label>
	    	<input type="text" id="lname" name="lastname" placeholder="Your last name..">

	    	<label for="phonenumber" style="font-size: 18px;"> Phone Number </label>
	    	<input type="text" id="phnumber" name="phonenumber" placeholder="Enter your phone number..">

	    	<label for="email" style="font-size: 18px;"> Email </label>
	    	<input type="text" id="email" name="email" placeholder="Enter your email..">

    		<label for="message" style="font-size: 18px;"> Subject </label>
	    	<textarea id="message" name="message" placeholder="Write something.." style="height:200px" style="font-size: 18px;"></textarea>

    		<input type="submit" value="Submit">
  		</form>
	</div>

	<hr class="hrstyle" />

	<div class="w3-display-container w3-black" style="height: 200px; text-align: center;" id="follow_us"> <br /> <br /> <br />
		<a href="https://www.facebook.com/" class="fa fa-facebook" style="font-size: 30px;"></a>
		<a href="https://twitter.com/" class="fa fa-twitter" style="font-size: 30px;"></a>
		<a href="https://www.google.com/" class="fa fa-google" style="font-size: 30px;"></a>
		<a href="https://www.youtube.com/" class="fa fa-youtube" style="font-size: 30px;"></a>
		<a href="https://www.instagram.com/" class="fa fa-instagram" style="font-size: 30px;"></a>
		<a href="https://www.pinterest.co.uk/" class="fa fa-pinterest" style="font-size: 30px;"></a>
		<a href="https://vimeo.com/" class="fa fa-vimeo" style="font-size: 30px;"></a>
		<a href="https://www.tumblr.com/" class="fa fa-tumblr" style="font-size: 30px;"></a>
		<a href="https://www.stumbleupon.com/" class="fa fa-stumbleupon" style="font-size: 30px;"></a>
		<a href="https://www.flickr.com/" class="fa fa-flickr" style="font-size: 30px;"></a>
	</div>

<?php /**PATH /home/dell/Desktop/LaravelRouting/WTLProject/resources/views/front_page.blade.php ENDPATH**/ ?>
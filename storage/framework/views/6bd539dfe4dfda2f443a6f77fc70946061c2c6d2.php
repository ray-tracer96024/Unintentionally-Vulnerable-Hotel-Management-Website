
	<title> Book A Room </title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/book_now.css')); ?> " />
	<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/navigation_bar.css')); ?> " />
	<link rel="stylesheet" type="text/css" href=" <?php echo e(url('/css/back_ground_image.css')); ?> " />
	<link rel="stylesheet" type="text/css" href=" <?php echo e(url('https://www.w3schools.com/w3css/4/w3.css')); ?> " />
	<link rel="stylesheet" type="text/css" href=" <?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')); ?> " />

<style type="text/css">
	body, html {
		height: 100%;
		font-family: Arial, Helvetica, sans-serif; 
		font-size: 12px;
	}

	hr.hrstyle {
		border: 1px solid red;
	}
</style>
<body>
	<ul>
		<li><a href="front_page.html" style="font-size: 18px;"> Check Availability </a></li>
		<li><a href="front_page.html" style="font-size: 18px;"> Rooms </a></li>
		<li><a href="front_page.html" style="font-size: 18px;"> Photos </a></li>
		<li><a href="front_page.html" style="font-size: 18px;"> What We Do </a></li>
		<li><a href="front_page.html" style="font-size: 18px;"> Our Hotels </a></li>
		<li><a href="front_page.html" style="font-size: 18px;"> Contact Us </a></li>
		<li><a href="front_page.html" style="font-size: 18px;"> Follow Us </a></li>
		<li style="float: right;"><a href="#book_now" style="font-size: 18px;"> Book Now </a></li>
	</ul>

	<div class="w3-container w3-red">
		<p class="w3-xxxlarge"><a href="front_page.html" style="text-decoration: none;"> Hotel South Point </a></p>
	</div>

	<hr class="hrstyle" />

	<div class="container">
		<formaction="book_now.php" method="POST">
			<p style="font-size: 55px;"> Register Form </p>
    		<p style="font-size: 20px;">Please fill in this form to book a room</p>
    		
    		<hr>
		    
		    <label for="firstname" style="font-size: 20px;"><b>First Name</b></label>
	    	<input type="text" placeholder="Enter your First name..." name="firstname" required />
	    	
	    	<hr>
	    	
	    	<label for="lastname" style="font-size: 20px;"><b>Last Name</b></label>
	    	<input type="text" placeholder="Enter your Last name..." name="lastname" required />

	    	<hr>

	    	<label for="address" style="font-size: 20px;"><b>Address</b></label>
	    	<input type="text" placeholder="Enter your Address..." name="address" required />
    		
    		<hr>

    		<label for="email" style="font-size: 20px;"><b>Email</b></label>
	    	<input type="text" placeholder="Enter your email..." name="email" required />

	    	<hr>

	    	<label for="phonenumber" style="font-size: 20px;"><b>Phone Number</b></label>
	    	<input type="number" placeholder="Enter your phone number..." name="phonenumber" required />

	    	<hr>

	    	<label for="selectroom" style="font-size: 20px;"><b>Input Type Of Room</b></label> <br /> <br />
	    	<select>
	    		<option value="Single Room"> Single Room </option>
	    		<option value="Double Room"> Double Room </option>
	    		<option value="Deluxe Room"> Deluxe Room </option>
	    		<option value="Executive Room"> Executive Room </option>
	    	</select>

	    	<hr>

	    	<label for="inputparents" style="font-size: 20px;"><b>Number of Adults</b> <p style="font-size: 15px;">[ Maximum 6, Minimum 0 ]</p></label>
	    	<input type="number" name="inputparents" placeholder="Enter the number of Adults..." min="0" max="6" />

	    	<hr>

	    	<label for="inputkids" style="font-size: 20px;"><b>Number of Kids</b> <p style="font-size: 15px;">[ Maximum 6, Minimum 0 ]</p></label>
	    	<input type="number" name="inputkids" placeholder="Enter the number of Kids..." min="0" max="6" />

	    	<hr>

	    	<label for="check_in_date" style="font-size: 20px;"><b>Check-In</b> <p style="font-size: 15px;"> [ Enter the Check-In Date ] </p></label>
	    	<input type="date" name="check_in_date" placeholder="DD/MM/YYYY" />

	    	<hr>

	    	<label for="check_out_date" style="font-size: 20px;"><b>Check-Out</b> <p style="font-size: 15px;"> [ Enter the Check-Out Date ] </p></label>
	    	<input type="date" name="check_out_date" placeholder="DD/MM/YYYY" />

	    	<hr>
	    	<br>
	    	
    		<button type="submit" class="submit-btn" style="font-size: 20px;">Register</button>
		</form>
	</div>

	<hr class="hrstyle" />

	<div class="w3-display-container w3-black" style="height: 200px; text-align: center;"> <br /> <br /> <br />
		<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
		<a href="https://twitter.com/" class="fa fa-twitter"></a>
		<a href="https://www.google.com/" class="fa fa-google"></a>
		<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
		<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
		<a href="https://www.pinterest.co.uk/" class="fa fa-pinterest"></a>
		<a href="https://vimeo.com/" class="fa fa-vimeo"></a>
		<a href="https://www.tumblr.com/" class="fa fa-tumblr"></a>
		<a href="https://www.stumbleupon.com/" class="fa fa-stumbleupon"></a>
		<a href="https://www.flickr.com/" class="fa fa-flickr"></a>
	</div>
</body>
</html>
<?php /**PATH /home/dell/Desktop/LaravelRouting/WTLProject/resources/views/book_now.blade.php ENDPATH**/ ?>
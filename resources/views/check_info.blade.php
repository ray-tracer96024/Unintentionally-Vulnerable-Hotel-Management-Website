	<title> Information </title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href=" {{ url('/css/check_info.css') }} " />
	<link rel="stylesheet" type="text/css" href=" {{ url('/css/navigation_bar.css') }} " />
	<link rel="stylesheet" type="text/css" href=" {{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }} " />
	<link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }} ">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script> 
	$(document).ready(function() {
		$("#click_here").click(function() {
			$("#information").slideToggle("fast");
		});
	});
</script>

<body>	
	<ul>
		<li><a href="#check_availabilty" style="font-size: 18px;"> Check Availability </a></li>
		<li><a href="#rooms" style="font-size: 18px;"> Rooms </a></li>
		<li><a href="#photos" style="font-size: 18px;"> Photos </a></li>
		<li><a href="#services" style="font-size: 18px;"> Services </a></li>
		<li><a href="#our_hotels" style="font-size: 18px;"> Our Hotels </a></li>
		<li><a href="#contact" style="font-size: 18px;"> Contact Us </a></li>
		<li><a href="#follow_us" style="font-size: 18px;"> Follow Us </a></li>
		<li style="float: right;"><a href="book_now.html" style="font-size: 18px;" target="_blank" title="Book a Hotel Room" > Book Now </a></li>
	</ul>

	<hr class="hr-style" />

	<div class="container-fluid text-white" style="background-color: red; padding: 20px;">
		<h1 class="display-4"> Hotel South Point </h1>
	</div>

	<hr class="hr-style" />

	<div id="click_here">
		Click Here to toggle
	</div>

	<table id="information">
		<thead>	
			<tr>
				<th>First Name</th>
			    <th>Last Name</th>
			    <th>Email</th>
			    <th>Phone Number</th>
			    <th>Select Room</th>
			    <th>Input Parents</th>
			    <th>Input Kids</th>
			    <th>Check-In Date</th>
			    <th>Check-Out Date</th>
			</tr>
  		</thead>
  		
  		<tbody>	
			<tr>
  					<td>e1</td>
  					<td>e2</td>
  					<td>e3</td>
  					<td>e4</td>
  					<td>e5</td>
  					<td>e6</td>
  					<td>e7</td>
  					<td>e8</td>
  					<td>e9</td>
  				</tr>
                <tr>
  					<td>e1</td>
  					<td>e2</td>
  					<td>e3</td>
  					<td>e4</td>
  					<td>e5</td>
  					<td>e6</td>
  					<td>e7</td>
  					<td>e8</td>
  					<td>e9</td>
  				</tr>
                <tr>
  					<td>e1</td>
  					<td>e2</td>
  					<td>e3</td>
  					<td>e4</td>
  					<td>e5</td>
  					<td>e6</td>
  					<td>e7</td>
  					<td>e8</td>
  					<td>e9</td>
  				</tr>			
  		</tbody>
	</table>

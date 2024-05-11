<div class="sub_header">

	<div class="sub_header_c">
		<i class="fa-solid fa-bars" onclick="menu()"></i>
	</div>

	<div class="sub_header_c1">
		<img src="img/logo.png" alt="raj shree palace logo">

	</div>
	<div class="sub_header_c3">
		<span>Welcome to Hotel Raj Shree</span>
	</div>
	<div class="sub_header_c2">
		<a href="tel:+91-8979377130"><i class="fa-solid fa-square-phone"></i>+91-8979377130</a>
		<a href="https://maps.app.goo.gl/sV5g62hTSUQhAahm9"><i class="fa-solid fa-location-dot"></i>Jakhdhar Road,
			Guptkashi</a>
		<a href="book-now.php" class="header-btn"><span>Room Bookings</span></a>
	</div>

</div>

<div class="header">
	<div class="header_c1">
		<ul>
			<li><a href="index.php">Home</a>
				<p><a href="index.php">Welcome</a></p>
			</li>
			<li><a href="about-us.php">About Us</a>
				<p><a href="about-us.php">Explore</a></p>
			</li>
			<li><a href="room.php">Rooms</a>
				<p><a href="room.php">Reservation</a></p>
			</li>
			<li><a href="gallery.php">Gallery</a>
				<p><a href="gallery.php">Photo Gallery</a></p>
			</li>
			<li><a href="contact-us.php">Contact</a>
				<p><a href="contact-us.php">Get in Touch</a></p>
			</li>

		</ul>
	</div>
	<div class="header_c2"></div>
</div>



<div class="header_mobile" id="header_mobile">
	<div class="header_raj">
		<h3>Raj Shree Palace</h3>
	</div>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about-us.php">About Us</a></li>
		<li><a href="room.php">Rooms</a></li>
		<li><a href="gallery.php">Gallery</a></li>
		<li><a href="contact-us.php">Contact</a></li>
		<li>
			<p class="button">
				<a href="book-now.php" class="section-btn">
					Book Now
				</a>
			</p>
		</li>
	</ul>

	<span><i class="fa-solid fa-xmark" onclick="xmark()"></i></span>
</div>



<script type="text/javascript">
	function menu() {
		//alert("hello");
		var a = document.getElementById("header_mobile");
		a.style.display = "block";


	}

	function xmark() {
		//alert("hello");
		var a = document.getElementById("header_mobile");
		a.style.display = "none";


	}
</script>
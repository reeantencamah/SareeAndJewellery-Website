<html>
	<head>
		<title> Vi sarees & Jewellery </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

	</style>
	</head>
<body>
	

	
	<div class="header">
	 <form class="search">
	 <img src="images/home.png" alt="home" width="25" height="25"> <a href="home.html" >Home |</a>
		<input type="text" name="search" placeholder="Search.." size="13" >  <a href="details/login.html">  | <img src="images/login.png" alt="login" width="20" height="20"> Login |</a> <img src="images/cart.png" alt="cart" width="20" height="20"><a href=""> Cart </a>
	</form>	
	</div>
	
	<div class="nav">
		<ul>
			<li><a href="details/categories.html">Saree</a>
				<ul>
					<li><a>Wedding Wear</a></li>
					<li><a>Bridal Wear</a></li>
					<li><a>Festive Wear</a></li>
					<li><a>Casual Wear</a></li>
				</ul>
			</li>
			<li><a href="details/Jewellery.html">Jewellery</a>
				<ul>
					<li><a href="details/Earrings.html">Earrings</a></li>
					<li><a>Necklaces</a></li>
					<li><a>Bangles & Sets</a></li>
					<li><a>Rings</a></li>
					<li><a>Anklets</a></li>
				</ul>
			</li>
			<li><a>Discover</a>
				<ul>
					<li><a>New Arrival</a></li>
					<li><a>Bestsellers</a></li>
					<li><a>Summer Trends</a></li>
				</ul>
			</li>
		</ul>
	</div>
	
	
	<div class="Image-Slider" style="max-width:100px">
		<div class="fade">
			<img  class="mySlides" src="images/s1.png" alt="bannerdiwali" style="display:block;width:1345px;margin-left:auto;margin-right:auto;margin-top:40px">
			<img  class="mySlides" src="images/s2.png" alt="bannersaree" style="display:block;width:1345px;margin-left:auto;margin-right:auto;margin-top:40px">
			<img  class="mySlides" src="images/s3.png" alt="bannerjewel" style="display:block;width:1345px;margin-left:auto;margin-right:auto;margin-top:40px">
		</div>
	</div>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			   x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length)
			{
			  myIndex = 1;
		   }    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 2500); 
		}
	</script>    
	
	<div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
	</div>
	
	<br>
	<br>
	
	<div class="rectangle"></div>
	<div class="h">
		<a href="/demo/index.php">
		<img src="images/home/h31.png" alt="saree" width="680" height="255"></a>
	</div>
	
	<div class="rectangle1"></div>
	<div class="h1">
		<a href="details/Jewellery.html">
		<img src="images/home/h32.png" alt="jewel" width="680" height="250"></a>
	</div>
	
	<img src="images/h1.jpg" alt="saree" width="340" height="490" style="margin-top:45px;padding-left:15px;position:relative">		

	
	<img src="images/h2.jpg" alt="jewel" width="330" height="490" style="margin-top:45px;margin-left:660px;position:relative">
	
	<br>
	
	<a href="details/categories.html">
	<img src="images/re.png" alt="line" style="margin-top:30px">
	</a>
	
	<div class="gallery">
		  <a href="details/rajesthan1.0.html">
			<img src="images/r1.jpg" alt="saree" height="300">
		  </a>
		<div class="desc">Embroidered Border Art Silk Saree in Teal Blue</div>
		<div class="desc1">Rs 2300</div>
	</div>

	<div class="gallery">
		  <a href="" >
			<img src="images/r2.jpg" alt="saree" height="300">
		  </a>
		  <div class="desc">Embroidered Art Silk Saree in Navy Blue</div>
		  <div class="desc1">Rs 3000- 35% off</div>
	</div>

	<div class="gallery">
		  <a href="">
			<img src="images/r3.jpg" alt="saree" height="300">
		  </a>
		  <div class="desc">Embroidered Art Silk Saree in Teal Blue</div>
		  <div class="desc1">Rs 2900</div>
	</div>
	<div class="gallery">
		  <a href="">
			<img src="images/r4.jpg" alt="saree" height="300">
		  </a>
		  <div class="desc">H.N.H  G.Brasso Saree in Navy Blue and Fuchsia</div>
		  <div class="desc1">Rs 2700</div>
	</div>
	
	<div class="gallery">
		  <a href="">
			<img src="images/r5.jpg" alt="saree" height="300">
		  </a>
		  <div class="desc">Embroidered Art Silk Saree in Wine</div>
		  <div class="desc1">Rs 2550- 20% off</div>
	</div>
	
	<br>
	<a href="details/Jewellery.html">
	<img src="images/re1.png" alt="line" style="margin-top:20px">
	</a>
	
	<div class="gallery" >
		  <a href="">
			<img src="images/r6.jpg" alt="jewel" height="300" >
		  </a>
		<div class="desc">Stone Studded Necklace Set in White and Golden</div>
		<div class="desc1">Rs 1300</div>
	</div>

	<div class="gallery">
		  <a href="">
			<img src="images/r7.jpg" alt="jewel" height="300">
		  </a>
		  <div class="desc">Kundan Earrings in Golden and White</div>
		  <div class="desc1">Rs 1200- 15% off</div>
	</div>

	<div class="gallery">
		  <a href="">
			<img src="images/r8.jpg" alt="jewel" height="300">
		  </a>
		  <div class="desc">Beaded Choker Necklace Set</div>
		  <div class="desc1">Rs 1300</div>
	</div>
	<div class="gallery">
		  <a href="">
			<img src="images/r9.jpg" alt="jewel" height="300">
		  </a>
		  <div class="desc">Stone Studded Adjustable Double Finger Ring</div>
		  <div class="desc1">Rs 900</div>
	</div>
	
	<div class="gallery">
		  <a href="#">
			<img src="images/r10.jpg" alt="jewel" height="300">
		  </a>
		  <div class="desc">Beaded Pair of Anklets in Golden and White pearl</div>
		  <div class="desc1">Rs 900- 15% off</div>
	</div>
	
	
	<div class="navbottom">
		<div class="footer">
			<div class="container">
				<img src="images/footer.png" alt="footer" width="1349" height="15">

				<div class="row" >
					<div class="column sidef">
						<h2 >Company</h2>
							<ul>
								<li><a href="details/aboutus.html">About Us</a><li>
								<li><a href="details/contactus1.php">Contact Us</a><li>
								<li><a href="">Blog</a><li>
								<li><a href="">Terms</a><li>
								<li><a href="details/feedback.html">Submit Feedback</a><li>
							</ul>
					</div>
					
					<div class="column sidef" >
						<h2 >Help</h2>
							<ul>
								<li><a href="">How to pay</a><li>
								<li><a href="">Payments</a><li>
								<li><a href="">Shipping</a><li>
								<li><a href="">FAQ</a><li>
							</ul>
					</div>
					
					<div class="column sidef2">
						<h2>Our Social Links:-</h2>
							<a href="https://www.facebook.com/selvina21/" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google"></a>
							<a href="#" class="fa fa-youtube"></a>
							<a href="#" class="fa fa-instagram"></a>
					</div>
					
					<div class="column sidef2" style="text-align:center">
						<h4>SUBSCRIBE AND GET 10% OFF</h4>		
							<input type="email" name="email" placeholder="Enter Email here.." style="height:35px;width:200px">
							<button type="Submit" style="height:35px;width:70px;background-color:CadetBlue;border:none;font-size:15px;font-weight:bold">Join</button>
							<p style="font-size:11px;margin-top:60px">© 2018 VI SAREE & JEWELLERY. ALL RIGHTS RESERVED.</P>
					</div>
				</div>
			</div>

		</div>
		
	</div>
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	
	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
		
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
	
}
</script>
</body>
</html>
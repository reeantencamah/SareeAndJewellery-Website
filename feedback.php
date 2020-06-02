<?php
include("db.php");
$flag=0;

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$f2=$_POST['f2'];
	
	$b=implode(",",$f2);
	$result=mysqli_query($con,"insert into feedback(1,2) values('$email','$b')");
	
	if($result)
		{
			$flag=1;
		}
}
?>



<html>

<head>
<title> Feedback</title>

<style>
body {
	margin:0;
    background-image: url("../images/pale.jpg");
	background-repeat: no-repeat;
	background-size:cover;
}
form{
	margin-left:180px;
	background: linear-gradient(to right,RosyBrown,LavenderBlush );
	width:1000px;
	height:1400px;
	border: 3px solid teal;	
}
a{color:black;}

		a:active {color: lightblue;}
		a:hover {color: DarkSlateGrey  ;}
		a:link {text-decoration: none;}
h3 {
    background-color: teal;
	height:50px;
	padding-left:10px;
	font-size:21px;
}
p{
font-family:"Segoe UI Semibold";
padding:10px;
}

ol{
	font-family:"Segoe UI Semibold"}

</style>
<head/>

<body>
<form action="feedback.php" method="POST"">
		<button style="height:35px;width:130px;background-color:CadetBlue;font-size:15px;border-radius: 20px;margin-top:60px;float:right;margin-right:20px;border:2px"><a href="../home.html">Exit this survey</a></button>
		<img src="../images/logo2.png" style="width:300px;height:150px;">	
		<h3> <br>Website Experience Feedback</h3>
		<p>Dear Valued Customer,<br><br>As part of the ongoing process to improve our service, we would like to learn what is important to you, and how we can further improve our offering(s).
		This should only take a few minutes of your time. Your responses will help us in improving your shopping experience at Vi Saree & Jewellery.</P> 
		
		<ol>
		<br>
			<li> Your E-mail address? (We will send a discount coupon on this email address)<br><br><input type="email" name="email" " style="height:30px;width:300px"></li><br><br>
			<li>What is the purpose of your visit to Utsav Fashion today?<br><br>
				<input type="checkbox" name="f2[]" value="Shopping"> Shopping<br>
				<input type="checkbox" name="f2[]" value="Comparison of prices"> Comparison of prices<br>
				<input type="checkbox" name="f2[]" value="Company Information"> Company Information<br>
				<input type="checkbox" name="f2[]" value="Specific item purchase"> Specific item purchase<br>
				<input type="checkbox" name="f2[]" value="Product Information"> Product Information<br>
				<input type="checkbox"> Other (please specify)  <input type="text" size="40"><br>
			</li><br><br>
			<li>How often do you visit Utsav Fashion?<br><br>
				<input type="radio"> Daily<br>
				<input type="radio"> Once in a week<br>
				<input type="radio"> Once in a month<br>
				<input type="radio"> Occasionally<br>
				<input type="radio"> This is my first time<br>
			</li><br><br>
			<li>How did you learn about Utsav Fashion?<br><br>
				<input type="checkbox"> Television Ad<br>
				<input type="checkbox"> Social Media Site( like Facebook, Twitter, Google+ etc.)<br>
				<input type="checkbox"> I have visited Vi Saree & Jewellery before<br>
				<input type="checkbox"> Internet Ad<br>
				<input type="checkbox"> Web Search Engine<br>
				<input type="checkbox"> Email<br>
				<input type="checkbox"> Friend or Relative<br>
				<input type="checkbox"> Magazine<br>
				<input type="checkbox"> Other (please specify)  <input type="text" size="40"><br>
			</li><br><br>
			<li>For which of the following categories did you visit Vi Saree & Jewellery?<br><br>
				<input type="checkbox"> Saree<br>
				<input type="checkbox"> Jewellery<br>
			</li><br><br>
			<input type="submit" name="submit" value="submit" style="margin-left:400px;height:45px;width:120px;background-color:CadetBlue;font-size:20px;font-weight:bold;border-radius:15px">
		
		</ol>
		
		
		
</form>

</body>
</html>
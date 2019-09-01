
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" type="text/css">
	<title>ATN SUPPER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/hover-min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 80%;
      margin: auto;
  }
  </style>
	
</head>
<body>

	<!-- phần top -->
		<div class="top">
			<div class="top-L">
				<form action="timkiem.java">
					<div id="containSearch">
						<input type="text" placeholder="Search" style="padding: 6px;
    padding-right: 45px; border-radius: 20px;">
						<input id="btnsearch" type="submit" value="">
					</div>

				</form>
			</div>
			<div class="top-R" >
				<ul>
					<li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto; color: white">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="Login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'"  class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script></li>
					<li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto; color: white">Sign Up</button>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="Signup.php" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fills in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>

      <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pwrepeat" required>
      
      <label> -->
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</li>
				</ul>
			</div>
			<div class="giohang">
				<a href="#"><img src="cart-1.png" alt="hình giỏ hàng"></a>
				<p><a href="hinhgiohang">Empty Cart</a></p>
			</div>

		</div>

	<!-- phần Logo-->
	<div class="logo">
		<div class="logo-Left">
			<ul>
		<li><img src="logo1.png" width="70px" height="70px" style="margin:5px;margin-left: 50px"></li>
		<li><h1 style="margin-left: 15px; color: #d04141;
    font-family: cursive;">
		ATN SUPPER</h1></li>
			</ul>
		</div>
		
		<div class="logo-Right">
			<ul>
					<li><a href="VindeFrance.php" class="hvr-underline-from-center"> Home</a></li>
					<li><a href="VindeFrance.php" class="hvr-underline-from-center"> 

</a></li>
					
					
				</ul>

		</div>
	</div>



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="banner.jpg" alt="Chania" width="460" height="345">
     
      </div>

      <div class="item">
        <img src="banner.jpg" alt="Chania" width="460" height="345">
      
      </div>
    
      <div class="item">
        <img src="banner.jpg" alt="Chania" width="460" height="345">
   
      </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- chi tiết sp-->

<div class="container-fluid" style="margin: 25px;
    margin-left: 120px;">
<?php include 'Product_list.php';?>
</div>


<!-- chat-->
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

	<!-- phần thông tin-->
	<div class="container">
		<div class="info">
			<h3>Follow Us</h3>
			<ul>
				<li><a href="https://www.facebook.com/buitam0098" class="hvr-wobble-vertical">
						<span class="social" id="facebook"></span>
						<span class="txtSocial">FaceBook</span>
					</a></li>

				<li><a href="https://www.facebook.com/buitam0098" class="hvr-wobble-vertical">
						<span class="social" id="Twitter"></span>
						<span class="txtSocial">Twitter</span>
					</a></li>
				<li><a href="https://www.facebook.com/buitam0098" class="hvr-wobble-vertical">
						<span class="social" id="Google"></span>
						<span class="txtSocial">Google+</span>
					</a></li>
			
		</ul>
		</div>


		
		<div class="info">
				<h3>Information</h3>
				<ul>
					<li><a href="#" >
							<span>Specials</span>
						</a></li>
	
					<li><a href="#" >
							<span>New Products</span>
						</a></li>


					<li><a href="#" >
							<span>Our Stores</span>
						</a></li>


					<li><a href="#" >
								<span>Contact Us</span>
					</a></li>


					<li><a href="#" >
							<span>Top Sellers</span>
						</a></li>
				</ul>
		</div>

		<div class="info">
				<h3>My Account</h3>
				<ul>
					<li><a href="#" >
							<span>My Account</span>
						</a></li>
	
					<li><a href="#" >
							<span>My Credit slips</span>
						</a></li>


					<li><a href="#" >
							<span>My Merchandise returns</span>
						</a></li>


					<li><a href="#" >
								<span>My Personal info</span>
					</a></li>


					<li><a href="#" >
							<span>My Addresses</span>
						</a></li>
				</ul>
		</div>

		<div class="info">
				<h3>Store Information</h3>
				<ul>
					<p style="color:gray">ATN SUPPER<br>
						28 Pham Van Dong,<br>
						Thanh Xuan,Ha Noi.<br>
						+0328620615 </p>
						<li><a href="#" >
							<span>Tambtgcs17655@fpt.edu.vn</span>
						</a></li>
				</ul>
		</div>
		<hr class="phanvung">

		</div>

		
	<!-- phần footer-->
<div class="footer">
	<div class="container-fluid" style="margin-left: 150px;">
	<div class="childfooter" id="leftfooter">
		<form action="#">
			<input type="text" placeholder="Enter your Email" style="border: 1px solid #484747; padding: 8px;">
			<input type="submit" value="Subcrible" style=" padding: 7px;
			padding-left: 20px;
			text-align: center;
			padding-right: 20px;
			background-color: white;
			background: gray;
			border: 1px solid #484747;">
		</form>
	</div>
	<div class="childfooter" id="rightfooter" style="padding: 20px; padding-left: 40px">© 2018 ATN SUPPER. All Rights Reserved | Design by Buitam</div>

	</div>
</div>
</body>
</html>
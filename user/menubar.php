<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<title></title>
	
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
	<script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="../js/animated-menu.js" type="text/javascript"></script>
</head>

<body>
<div id="categoryMenuContainer"><ul class="menuUlLeft">
	<?php
		include_once 'categoryMenubar.php';
	?>
		</div> <!-- end div categoryMenuContainer-->
		
	<div id="menuContainer">
	
	<ul class="menuUl">
	<b>
		<a href="#"><li class="green menuLi" id="home">
			<p>Home</p>
			<p class="subtext">The front page</p>
		</li></a>
		<a href="#"><li class="red menuLi" id="aboutus">
			<p>About Us</p>
			<p class="subtext">More info</p>
		</li></a>
		<a href="#"><li class="yellow menuLi" id="faq">
			<p>FAQ's</p>
			<p class="subtext">Frequent Questions</p>
		</li></a>
		<a href="#"><li class="purple menuLi" id="contactus">
			<p>Contact Us</p>
			<p class="subtext">Get in touch</p>
		</li></a>
		
		</b>
	</ul>
	</div> <!-- end div menuContainer -->
</body>
</html>

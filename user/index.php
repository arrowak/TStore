<html>
<head>
	<title> tStore </title>
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/userpagestyle.css">
	
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){  
			getItems();	
			
			
			$("#home").click(function(){
				getItems();
			});
			
			$("#contactus").click(function(){
				getContactForm();
			});
			
			$("#kidswear").click(function(){
				$.ajax({
					type: "POST",
					url: "kidswear.php",
					datatype: "html",
					success: function(data) {
						$("#containerContent").html(data);
					}   
				});
			});
			
			
			
		});
		
		// definition of the functions
		
		function contactUs(){
			var inputname=$("#inputName").val();	
			var inputemail=$("#inputEmail").val();	
			var inputphone=$("#inputPhone").val();	
			var inputmessage=$("#inputMessage").val();	
			if(inputname == "" || inputemail == "" || inputphone == "" || inputmessage == "")
			{
				$("#contactsuccessmessage").css("display","block");
					$("#contactsuccessmessage").html("Please fill all the fields.");
					$("#contactsuccessmessage").attr('class','alert alert-error');
					$("#contactsuccessmessage").hide();			
					$("#contactsuccessmessage").fadeIn(1500);
			}
			else
			{
				$("#contactsuccessmessage").css("display","block");
					$("#contactsuccessmessage").html("Sending mail. Please wait....");
					$("#contactsuccessmessage").attr('class','alert');
					$("#contactsuccessmessage").hide();			
					$("#contactsuccessmessage").fadeIn(1500);		
					
			$.post('contactMsgSend.php', {inputname: inputname,inputemail: inputemail,inputphone: inputphone,inputmessage: inputmessage},
				function(data){
				$("#contactsuccessmessage").css("display","block");
					$("#contactsuccessmessage").html(data);
					$("#contactsuccessmessage").attr('class','alert');
					$("#contactsuccessmessage").hide();			
					$("#contactsuccessmessage").fadeIn(1500);				
			});
			}
		}
		
		function getItems(){
			$.ajax({
  type: "POST",
  url: "items.php",
  datatype: "html",
  success: function(data) {
		$("#containerContent").html(data);
	}   
	});
		}
		
		
		function getContactForm(){
			$.ajax({
  type: "POST",
  url: "contactUs.php",
  datatype: "html",
  success: function(data) {
		$("#containerContent").empty();
		$("#containerContent").html(data);
	}   
	});
		}
		
		
		function getAboutForm(){
		
		}
	</script>
	
	
	<script type="text/javascript">
		jQuery(function($) { 

  // settings
  var $slider = $('.slider'); // class or id of carousel slider
  var $slide = 'li'; // could also use 'img' if you're not using a ul
  var $transition_time = 1000; // 1 second
  var $time_between_slides = 4000; // 4 seconds

  function slides(){
    return $slider.find($slide);
  }

  slides().fadeOut();

  // set active classes
  slides().first().addClass('active');
  slides().first().fadeIn($transition_time);

  // auto scroll 
  $interval = setInterval(
    function(){
      var $i = $slider.find($slide + '.active').index();

      slides().eq($i).removeClass('active');
      slides().eq($i).fadeOut($transition_time);

      if (slides().length == $i + 1) $i = -1; // loop to start

      slides().eq($i + 1).fadeIn($transition_time);
      slides().eq($i + 1).addClass('active');
    }
    , $transition_time +  $time_between_slides 
  );

});
	</script>
	

</head>

<header>
	<div id="bannerimg">
		<img src="../img/tbekuBanner.png"/>
	</div> <!-- End div bannerimg -->
	<ul class="slider">	
		<li>
		<img src="../img/category-polo0.jpg" />
		</li>
		<li>
		<img src="../img/category-tshirt0.jpg" />
		</li>
		<li>
		<img src="../img/category-wb0.jpg" />		
		</li>
		<li>
		<img src="../img/header-irish.jpg" />		
		</li>
		<li>
		<img src="../img/page-three-news_01.jpg" />		
		</li>
		<li>
		<img src="../img/rBEDik_IL-gIAAAAAAHvE-9wJAUAAATlQPtgRwAAe8r005.jpg" />		
		</li>
		<li>
		<img src="../img/shop2tshirt3fixed2.jpg" />		
		</li>
		<li>
		<img src="../img/slide-1.jpg" />		
		</li>
		<li>
		<img src="../img/tshirt-printing-page1.jpg" />		
		</li>
	</ul>
</header>
<body>	
	
	<div class="container">
<div id="menuDiv">
<?php 
		include 'menubar.php';
	?>
	</div>	<!-- End div menuDiv -->
	
	<div id="containerContent">
			
	</div>
		
	</div> <!-- End div container -->
	
	
<div id="modalcontainer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
<div id="modalcontainer2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header2</h3>
  </div>
  <div class="modal-body">
    <p>Body of modal container 2</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
</body>

<footer>
<hr>
Copyright 2012
</footer>
</html>

<html>
<head>
	<title> tStore </title>
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/userpagestyle.css">
	
	<script src="../js/jquery.js"></script>
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

<body>	
	<div id="bannerimg">
	<img src="../img/tbekuBanner.png"/>
	</div> <!-- End div bannerimg -->
	<br>
	<br><br>
	<div class="container">
		<ul class="slider thumbnail">
		<li>
		<img src="../img/bootstrap-mdo-sfmoma-01.jpg" />
		</li>
		<li>
		<img src="../img/bootstrap-mdo-sfmoma-02.jpg" />
		</li>
		<li>
		<img src="../img/bootstrap-mdo-sfmoma-03.jpg" />		
		</li>
	</ul>
	</div> <!-- End div container -->
	
</body>
</html>

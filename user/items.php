<script type="text/javascript">
$(document).ready(function(){
/* $(".item").live("click",function(){
	
		var name = $(this).attr('data-name');
		var price = $(this).attr('data-price');
		var desc = $(this).attr('data-description');
		var img = $(this).attr('data-image');
		#('#myModalLabel').html(name);
		$('#modalcontainer').modal('toggle');
		return false;		
	}); */
	
	
	$(".modaldetails").click(function(){
		var name = $(this).attr('data-name');
		var price = $(this).attr('data-price');
		var desc = $(this).attr('data-description');
		var img = $(this).attr('data-image');
		$("#myModalLabel").html(name);
		$("#modalleftdiv").html("<img src='"+img+"' class='thumbnail'><br><br><b><span style='color:red;'>Price : "+price+"</span></b>");
		$("#modalrightdiv").html("<p><b> Description : </b><br> </p> <p> "+desc+"</p>");
	});
});
</script>
<h4> Featured Products </h4>
<hr>
<ul id="itemswrapper">
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Animals" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various animals" data-image="../img/animals~1.jpg">
	<ul id="item1" class="item" >
		<li id="item1img"><img id="item1img" src="../img/animals~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Animals</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Numbers" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with numbers" data-image="../img/blue numbers~1.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/blue numbers~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Numbers</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Alphabets" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with alphabets" data-image="../img/blueboy~1.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/blueboy~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Alphabets</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Fruits" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various fruits" data-image="../img/fruits~1.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/fruits~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Fruits</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	
	
</ul>




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
		$("#modalleftdiv").html("<img class='modal-img' src='"+img+"' class='thumbnail'><br><br>");
		$(".modal-footer").html("<b><span id='modal-price' style='color:red;float:left;'>Price : "+price+"</span></b><br><span id='modal-desc' style='float:left;margin-top:0px;'><b> Description : </b> "+desc+"</span>");
	});
});
</script>
<h4 id="producthead" style="float:left;margin-top:-50px;"> Featured Products </h4>
<hr>
<ul id="itemswrapper">
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Alphabets" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with alphabets" data-image="../img/blueboy.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/blueboy~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Alphabets</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Numbers" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with numbers" data-image="../img/blue numbers.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/blue numbers~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Numbers</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Animals" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various animals" data-image="../img/animals.jpg">
	<ul id="item1" class="item" >
		<li id="item1img"><img id="item1img" src="../img/animals~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Animals</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>	
	
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Fruits" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various fruits" data-image="../img/fruits2.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/fruits2~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Fruits</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Seasons" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various Seasons" data-image="../img/seasons.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/seasons~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Seasons</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Shapes" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various Shapes" data-image="../img/shapes.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/shapes~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Shapes</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Sports" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various Sports Items" data-image="../img/sports.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/sports~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Sports Items</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	<a data-toggle="modal" class="modaldetails" title='View Details' href="#modalcontainer" data-name="Chintu with Vehicles" data-price="Rs.249/-" data-description="This is a classic half sleeve round-neck Tshirt for kids with the image of our education mascot 'Chintu' along with various Vehicles" data-image="../img/vehicles.jpg">
	<ul id="item2" class="item" >
		<li id="item1img"><img src="../img/vehicles~1.jpg" class="thumbnail"></li>
		<li id="item1name">Chintu with Vehicles</li>
		<li id="item1price">Rs.249/-</li>
	</ul>
	</a>
	
	
</ul>




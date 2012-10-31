<script type="text/javascript">
$(document).ready(function(){
$(".item").click(function(){	
		var name = $(this).attr('data-name');
		var price = $(this).attr('data-price');
		var desc = $(this).attr('data-description');
		var img = $(this).attr('data-image');
		
		$("#modaldata").html("<h2>"+name+"</h2> <br><div style=\"float:left;width:200px;text-align:center;\"> <image src=\""+img+"\" class=\"thumbnail\"><b><span style=\"color:red;margin-left:-50px;\">"+price+"</span></b></div><b> Description : </b> <br><p style=\"float:right;position:absolute;margin-left:210px;\">"+desc+"</p>");
	});
});
</script>
<h4> Featured Products </h4>
<hr>
<ul id="itemswrapper">
	<a rel="modal-profile" class="modaldetails" title='View Details' href="#">
	<ul id="item1" class="item" data-name="Classic Long Sleeve Pocket Pique Polo Tshirt" data-price="Rs.12000/-" data-description="This is a classic long sleeve pocket pique polo t-shirt suitable for polo sporting and casual appearances" data-image="../img/classic-long-sleeve-pocket-pique-polo.jpg">
		<li id="item1img"><img id="item1img" src="../img/classic-long-sleeve-pocket-pique-polo.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long </li>
		<li id="item1price">Rs.2500</li>
	</ul>
	</a>
	<a rel="modal-profile" class="modaldetails" title='View Details' href="#">
	<ul id="item2" class="item" data-name="Classic Long Sleeve Pocket Pique Polo Tshirt" data-price="Rs.2500/-" data-description="This is a classic long sleeve pocket pique polo t-shirt suitable for polo sporting and casual appearances" data-image="../img/ipsum-dolor-sit-amet-consectetur.jpg">
		<li id="item1img"><img src="../img/ipsum-dolor-sit-amet-consectetur.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long Sleeve Polo</li>
		<li id="item1price">Rs.2500</li>
	</ul>
	</a>
	<ul id="item1" class="item">
		<li id="item1img"><img src="../img/jerzees-adult-6-oz-100-cotton-jersey-men-s-golf-shirt.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long Sleeve Polo</li>
		<li id="item1price">Rs.2500</li>
	</ul>
	<ul id="item1" class="item">
		<li id="item1img"><img src="../img/levi-s-western-plaid-button-up-shirts.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long Sleeve Polo</li>
		<li id="item1price">Rs.2500</li>
	</ul>
	<ul id="item1" class="item">
		<li id="item1img"><img src="../img/lorem-ipsum-dolor-sit-amet-consectetur.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long Sleeve Polo</li>
		<li id="item1price">Rs.2500</li>
	</ul>
	<ul id="item1" class="item">
		<li id="item1img"><img src="../img/set-dolor-sit-amet-consectetur.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long Sleeve Polo</li>
		<li id="item1price">Rs.2500</li>
	</ul>
	<ul id="item1" class="item">
		<li id="item1img"><img src="../img/set-ipsum-dolor-sit-amet-consectetur.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long Sleeve Polo</li>
		<li id="item1price">Rs.2500</li>
	</ul>
	<ul id="item1" class="item">
		<li id="item1img"><img src="../img/wrinkle-resistant-long-sleeve-stretch-shirt.jpg" class="thumbnail"></li>
		<li id="item1name">Classic Long Sleeve Polo</li>
		<li id="item1price">Rs.2500</li>
	</ul>
</ul>



<script type="text/javascript" src="../js/modal.js"></script>
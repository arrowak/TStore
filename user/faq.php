<div id="faqcontent">
	<table class="table table-striped">
	
		<tbody>
			<tr style="height:0px;"><td><h3>Frequently Asked Questions :</h3></td></tr>
			<tr>
				<td><b>1. Are Tshirtbeku's products limited only to kids wear?</b> </td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As of now, Tshirtbeku is focused on kids wear. However, other segments such as Men, Women, Boys, and Girls will be catered in the near future (within 2 months).<br></td>
			</tr>
			
			<tr>
				<td><b>2. Are the products related only to education?</b> </td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tshirtbeku's main focus is education. Hence, the products presently available are related to the same. <br></td>
			</tr>
			
			<tr>
				<td><b>3. Does Tshirtbeku provide customized T-shirts?</b> </td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes. Tshirtbeku is open for custom requirements (Tshirts for colleges, corporates, events etc.)<br></td>
			</tr>
			
			<tr>
				<td><b>4. Does Tshirtbeku take bulk orders for T-shirts?</b> </td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes. Tshirtbeku do take bulk orders for T-shirts. Please <a href="" style="text-decoration:underline;color:green" id="faqcontactus">contact us</a> for more information.</td>
			</tr>
			
			<tr>
				<td><b>5. How are these T-shirts helpful for kids?</b> </td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tshirtbeku believes kids will learn better through involvment and observation. They will be involved in the learning process, wherever they are, while they wear our t-shirts.</td>
			</tr>
		</tbody>
	</table>
</div>

<script>
$("#faqcontactus").click(function(){	
			$.ajax({
  type: "POST",
  url: "contactUs.php",
  datatype: "html",
  success: function(data) {
		$("#containerContent").empty();
		$("#containerContent").html(data);
	}   
	});
		});
</script>
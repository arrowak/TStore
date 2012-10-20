<html>
<head>
	<title> Admin Page - tStore </title>
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/style.css">

	<script type="text/javascript" href="../js/bootstrap-carousel.js"></script>
	<script src="../js/jquery.js"></script>
	
	<script>
	
$(document).ready(function(){
  	
  $("#manageProducts").click(function(){
    $("#content-wrapper").html("Manage Products!");	
	$("#manageProducts").attr("class","active");
	$("#manageCategories").attr("class","");
  });

  $("#manageCategories").click(function(){
   $("#manageProducts").attr("class","");
	$("#manageCategories").attr("class","active");
   $("#content-wrapper").hide(200);
   $("#content-wrapper").html("<form><legend>Manage Categories</legend><label>Select a Category</label><div class=\"input-prepend input-append\"><select id = \"lstCategories\"></select><button class=\"btn\" title=\"Edit Category\" type=\"button\" id=\"btnEditCategory\" onclick=\"editCategory();\">Edit</button><button class=\"btn\" title=\"Delete Category\" type=\"button\" id=\"btnDeleteCategory\" onclick=\"deleteCategory();\">Delete</button></div> </div><br><legend>Add New Category</legend><div><input class=\"span3\" id=\"txtCategoryToAdd\" size=\"16\" type=\"\" placeholder=\"Enter a category name\"><button class=\"btn btn-primary\" title=\"Add New Category\" type=\"button\" id=\"btnAddCategory\" onclick=\"addCategory();\">Add</button> </div><div id=\"message\" class=\"alert\" style = \"display:none;\"> </div></form>").show(100);
   
   getCategories();
  
  });
  
  
});

function getCategories(){
	$.ajax({
  type: "POST",
  url: "getCategories.php",
  datatype: "html",
  success: function(data) {
		$lstCategories = data.split("|");
		$lstCategories.sort();
		$("#lstCategories option").remove();
		for($i=1;$i<$lstCategories.length;$i++)
		{
			 $("#lstCategories").append($("<option></option>").attr("value", $lstCategories[$i]).text($lstCategories[$i]));
		}
	}   
	});
}

function addCategory(){
	var txtCategory=$("#txtCategoryToAdd").val();
	
	$.post('insertCategory.php', {txtCategory: txtCategory},
		function(data){
		$("#message").css("display","block");
			$("#message").html(data);
			$("#message").hide();			
			$("#message").fadeIn(1500);
			$("#txtCategoryToAdd").val("") ;
			getCategories();
	});

}
	
	
function deleteCategory(){
	var txtCategory=$("#lstCategories").val();
	
	$.post('deleteCategory.php', {txtCategory: txtCategory},
		function(data){
			$("#message").css("display","block");
			$("#message").html(data);
			$("#message").hide();		
			$("#message").fadeIn(1500);
			getCategories();
	});

	}
</script>
</head>


<body>
	<header> </header>
	
	<div class="container-fluid" id="main-container">
		<div id="row-fluid">
			<div class="span2" id="left-nav-bar">
				<ul class="nav nav-pills nav-stacked pull-left">		
					<li id="manageCategories" class="active"><a href="#">Manage Categories</a></li>
					<li id="manageProducts"><a href="#">Manage Products</a></li>
				</ul>	
			</div> <!-- end left_nav_bar div -->
	
			<div id="content-wrapper" class="span10">		
			</div> <!-- end content_wrapper div -->
	
		</div> <!-- end row-fluid div -->
	</div> <!-- end container-fluid div -->
	
	<footer> <hr> @copyright. 2012</footer>		
</body>
</html>

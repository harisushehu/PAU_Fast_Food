     Content
======================-->
<section class="content gallery pad1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
      
<form action="<?php echo URL; ?>update/run" method="post" enctype="multipart/form-data">

 
<label style="color:black;"><bold>Name</bold></label></br>
<input type="text" name="name" id="name"></br>
<label style="color:black"><bold>Type</bold></label></br>
<select name="type" id="type">
  <option value="Traditional Cuisine">Traditional Cuisine</option>
  <option value="Happy Hours and Offers">Happy Hours and Offers</option>
  <option value="Kids and Vegan Menu">Kid's and Vegan Menu</option>
</select></br>
  

 
<label style="color:black;"><bold style="float:right; margin-top:-80px;">New Name</bold></label></br>
<input style="float:right; margin-top:-80px;" type="text" name="newName" id="newName"></br>
<label style="color:black;"><bold style="float:right; margin-top:-80px;">New Type</bold></label></br>
<select name="newType" id="newType" style="float:right; margin-top:-80px">
  <option value="Traditional Cuisine">Traditional Cuisine</option>
  <option value="Happy Hours and Offers">Happy Hours and Offers</option>
  <option value="Kids and Vegan Menu">Kid's and Vegan Menu</option>
</select></br>

<label style="color:black"><bold style="float:right; margin-top:-80px;">New Price</bold></label></br>
<input style="float:right; margin-top:-80px;" type="text" name="newPrice" id="newPrice"></br>
<label style="color:black"><bold style="float:right; margin-top:-80px;">Picture</bold></label></br><br>
<input style="float:right; margin-right:-70px; margin-top:-80px;" type="file" name="newImage" id="newImage" />
<input type="submit" style="background-color:grey; width:70px; color:white" name="update" value="Update" onclick="validate()">
<br><br>
</form>
   
  </div>
</section>


<script type="text/javascript">
    
function validate()
{
var name = document.getElementById("name");
var new_name = /(.){2,28}/;

var type = document.getElementById("type");
var new_type = /(.){2,28}/;

if( !new_name.test(name.value) || !new_type.test(type.value) )
{
alert("Please specify which food you want to update");
}

}

</script>
     
</div>
</section>

<!--==============================

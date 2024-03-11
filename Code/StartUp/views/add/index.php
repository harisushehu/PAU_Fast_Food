       Content
======================-->
<section class="content gallery pad1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
      
      <form action="<?php echo URL; ?>add/run" method="post" enctype="multipart/form-data">

<label style="color:black"><bold>Name</bold></label></br>
<input type="text" name="name" id="name"></br>
<label style="color:black"><bold>Type</bold></label></br>
<select name="type" id="type">
  <option value="Traditional Cuisine">Traditional Cuisine</option>
  <option value="Happy Hours and Offers">Happy Hours and Offers</option>
  <option value="Kids and Vegan Menu">Kid's and Vegan Menu</option>
</select></br>

<label style="color:black"><bold>Price</bold></label></br>
<input type="text" name="price" id="price"></br>
<label style="color:black"><bold>Picture</bold></label></br>
<input type="file" name="image" id="image" /></br><br>

<input type="submit" style="background-color:grey; width:70px; color:white" name="add" value="Add" onclick="validate()">
<br><br>
</form>
      
  </div>
</section>


<script type="text/javascript">
    
function validate()
{
var name = document.getElementById("name");
var new_name = /(.){2,28}/;

var price = document.getElementById("price");
var new_price = /(.){2,28}/;

var image = document.getElementById("image");
var new_image = /(.){2,28}/;

if(!new_name.test(name.value) || !new_price.test(price.value) || !new_image.test(image.value))
{
//alert("Please don't leave an empty field");
}
else
{
alert('Food has been inserted successfully');     
}
}

</script>
     
</div>
</section>

<!--==============================

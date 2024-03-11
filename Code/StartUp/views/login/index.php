
         Content
======================-->
<section class="content gallery pad1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
      


<h1 style="font-size: 30px">Login</h1><br>

<form action="login/run" method="post">
    
<label style="color:black"><bold>Username</bold></label></br>
<input type="text" name="login" id="login"></br>
<label style="color:black"><bold>Password</bold></label></br>
<input type="password" name="password" id="password"></br>
<dd><input type="submit" style="background-color:grey; width:70px; color:white" name="submit" value="Login" onclick="validate()"></dd>
<br><br>
</form>

<script type="text/javascript">
    
function validate()
{
var username = document.getElementById("login");

var new_username = /(.){2,28}/;

if(!new_username.test(username.value))
{
alert("Invalid Username. Please enter a valid username");
}

var password = document.getElementById("password");

var new_password = /(.){2,28}/;

if(!new_password.test(password.value))
{
alert("Invalid Password. Please enter a valid password");
}

}

</script>

      
  </div>
</section>
<!--==============================
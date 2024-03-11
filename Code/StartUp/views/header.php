<!DOCTYPE html>
<html lang="en">
<head>
<title>PAÜ Fast Food</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="<?php echo URL; ?>public/images/favicon.ico">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/favicon.ico" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/stuck.css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/touchTouch.css">
<script src="public/js/jquery.js"></script>
<script src="public/js/jquery-migrate-1.1.1.js"></script>
<script src="public/js/script.js"></script> 
<script src="public/js/superfish.js"></script>
<script src="public/js/jquery.equalheights.js"></script>
<script src="public/js/jquery.mobilemenu.js"></script>
<script src="public/js/jquery.easing.1.3.js"></script>
<script src="public/js/tmStickUp.js"></script>
<script src="public/js/jquery.ui.totop.js"></script>
<script src="public/js/touchTouch.jquery.js"></script>

<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();

  }); 
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body>
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="<?php echo URL; ?>index.php">
            <img src="<?php echo URL; ?>public/images/PAUFAstFoodLogo.png" alt="Logo alt">
          </a>
        </h1>  
            
            <?php Session::init(); ?>
            
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
                  
                  <?php if (Session::get('admins') == true  ) 
                      {  ?>
                    
                    <li><a href="<?php echo URL; ?>add">add</a></li>
                    <li><a href="<?php echo URL; ?>update">update</a></li>
                    <li><a href="<?php echo URL; ?>delete">delete</a></li>
                     <li><a href="<?php echo URL; ?>waiting">order</a></li>
                       <?php if (Session::get('admins') == true): ?>
	              <li><a href="<?php echo URL; ?>dashboard/logout">logout</a></li>	
	            <?php  else: ?>
		    <li><a href="<?php echo URL; ?>login">login</a></li>
	            <?php endif; ?>
                  
                  <?php 
                      }
                  else if(Session::get('admins') == false ) 
                      {
                      
                  ?>
      
               <li><a href="<?php echo URL; ?>index">home</a></li>
               <li><a href="<?php echo URL; ?>menu">menu</a></li>
               <li><a href="<?php echo URL; ?>feedback">feedback</a></li>
               <li><a href="<?php echo URL; ?>contact">contacts</a></li>
               <?php if (Session::get('users') == true):?>
	       <li><a href="<?php echo URL; ?>dashboard/logout">logout</a></li>	
	<?php else: ?>
		<li><a href="<?php echo URL; ?>login">login</a></li>
	<?php endif; ?>
                
                <?php
                
                  }
                
                ?>
                
             </ul>
            </nav>        
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section> 

<?php
		if (isset($this->js)) 
		{
			foreach ($this->js as $js)
			{
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>

</header>        

<!--=====================
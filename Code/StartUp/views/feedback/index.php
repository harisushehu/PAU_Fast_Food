        Content
======================-->

<section class="content gallery pad1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
      
       <form id="bookingForm"  method="post" enctype="multipart/form-data">
          <div class="tmInput">
              <input name="name" placeHolder="Name:" width:200px type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
          </div><br>
        <div class="tmInput">
          <input name="email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
        </div><br>      
        
        <div class="tmTextarea">
            <textarea name="message" rows="10" cols="50" placeHolder="Message:" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
        </div>
        <div class="ta__right">
            <input type="submit" name="submit" style="float:left;" class="btn" value="send">  
            <input type="reset" style="float:left;" class="btn" value="clear">
        </div>
    </form>
      
  </div>
</section>
<!--==============================
      

<?php

if(isset($_POST['submit']))

$name = $_POST['name'];
$sender = $_POST['email'];
$message = $_POST['message'];

$to = 'harisushehu@gmail.com';
$Subject = 'Feedback about Food';
$header = 'From: $sender';
$senderReply = "Thank you for your feedback\n\n\nThis is an automated email. Please don't reply to this email";

if(strcmp($sender, '') == 0 || strcmp($message, '') == 0)
{
    echo "<script>alert('Please don't forget to fill the email and the feedback field')</script>";
}
else
{
$message = "Email From: " .$sender. "\n\n". $message;
if(mail($to, $Subject, $message, $header))
{
    //mail($to, $Subject, $msg, $header);
    mail($sender, $Subject, $senderReply, $header);
    echo "<script>alert('Email send')</script>";
   
}
else
{
    echo "<script>alert('Email not send')</script>";
   
}

} // end else not empty 

?>
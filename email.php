<?php
//add the recipient's address here
$myemail = 'nairey.keshishian@teamone-usa.com';
//$myemail = 'iamtheream@gmail.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['submit'])) {
   $email = strip_tags($_POST['email']);
   $vote1 = strip_tags($_POST['vote1']);
   $vote2 = strip_tags($_POST['vote2']);
   $vote3 = strip_tags($_POST['vote3']);
   $vote4 = strip_tags($_POST['vote4']);
   header('Location: thankYou.html');
   exit();
   //echo "<span class=\"alert alert-success\" >Your message has been received and we will get back to you shortly.</span><br><br>";
   //echo "<stong>Name:</strong> ".$name."<br>";   
   //echo "<stong>Email:</strong> ".$email."<br>"; 
   //echo "<stong>Message:</strong> ".$content."<br>";

      if(isset($_POST['interested'])) { // honey pot check
         die();
      } else {
   //generate email and send!
   $to = $myemail;
   $email_subject = "Contact form: $email";
   $email_body = "Donnie Rules!!! And that's a fact! \n".
   "email: $email \n ".
   "vote1: $vote1 \n ".
   "vote2: $vote2 \n ".
   "vote3: $vote3 \n ".
   "vote4: $vote4 \n ";
   $headers = "From: $email \n";
   //$headers .= "Reply-To: $email";
   mail($to, $email_subject, $email_body, $headers);
   }
}
?>



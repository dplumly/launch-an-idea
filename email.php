<?php
//add the recipient's address here
$myemail = 'nairey.keshishian@teamone-usa.com';
//$myemail = 'iamtheream@gmail.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['submit'])) {
   $ideaName = strip_tags($_POST['ideaName']);
   $elevatorPitch = strip_tags($_POST['elevatorPitch']);
   $teamList = strip_tags($_POST['teamList']);
   $details = strip_tags($_POST['details']);
   $message = strip_tags($_POST['message']);
   $link = strip_tags($_POST['link']);
   echo "<span class=\"alert alert-success\" >Your message has been received and we will get back to you shortly.</span><br><br>";
   //echo "<stong>Name:</strong> ".$name."<br>";   
   //echo "<stong>Email:</strong> ".$email."<br>"; 
   //echo "<stong>Message:</strong> ".$content."<br>";

      if(isset($_POST['interested'])) { // honey pot check
         die();
      } else {
   //generate email and send!
   $to = $myemail;
   $email_subject = "Contact form: $ideaName";
   $email_body = "Donnie Rules!!! And that's a fact! \n".
   "ideaName: $ideaName \n ".
   "elevatorPitch: $elevatorPitch \n ".
   "teamList: $teamList \n ".
   "details: $details \n ".
   "message: $message \n ".
   "link: $link \n ";
   $headers = "From: Donnie \n";
   //$headers .= "Reply-To: $email";
   mail($to, $email_subject, $email_body, $headers);
   }
}
?>



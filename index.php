<?php
//add the recipient's address here
$myemail = 'donnie.plumly@gmail.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['ideaName'])) {
$ideaName = strip_tags($_POST['ideaName']);
$elevatorPitch = strip_tags($_POST['elevatorPitch']);
$teamList = strip_tags($_POST['teamList']);
$details = strip_tags($_POST['details']);
$additional = strip_tags($_POST['additional']);
$email = strip_tags($_POST['email']);
$datafile = strip_tags($_POST['datafile']);
$link = strip_tags($_POST['link']);
echo "<span class=\"alert alert-success\" >Your message has been received and we will get back to you shortly.</span><br><br>";

// honey pot check
//if(isset($_POST['interested'])) {
    //die();
//} else {

/* GET File Variables  
$tmpName = $_FILES['attachment']['tmp_name']; 
$fileType = $_FILES['attachment']['type']; 
$fileName = $_FILES['attachment']['name']; */
 
/* Start of headers */ 
$headers = "From: $email"; 
 
/*if (file($tmpName)) { 
  $file = fopen($tmpName,'rb'); 
  $data = fread($file,filesize($tmpName)); 
  fclose($file); }*/
 
  /* a boundary string */
  $randomVal = md5(time()); 
  $mimeBoundary = "==Multipart_Boundary_x{$randomVal}x"; 
 
  /* Header for File Attachment */
  $headers .= "\nMIME-Version: 1.0\n"; 
  $headers .= "Content-Type: multipart/mixed;\n" ;
  $headers .= " boundary=\"{$mimeBoundary}\""; 
 
  /* Multipart Boundary above message 
  $message = "This is a multi-part message in MIME format.\n\n" . 
  "--{$mimeBoundary}\n" . 
  "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . 
  "Content-Transfer-Encoding: 7bit\n\n" . 
  $message . "\n\n"; 
 */
  /* Encoding file data 
  $data = chunk_split(base64_encode($data)); */
 
  /* Adding attchment-file to message
  $message .= "--{$mimeBoundary}\n" . 
  "Content-Type: {$fileType};\n" . 
  " name=\"{$fileName}\"\n" . 
  "Content-Transfer-Encoding: base64\n\n" . 
  $data . "\n\n" . 
  "--{$mimeBoundary}--\n"; */


//generate email and send!
$to = $myemail;
$email_subject = "Contact form: $ideaName";
$email_body = "You have received a new message on  \n".
"Idea Name: $ideaName \n ".
"Elevator Pitch: $elevatorPitch \n ".
"Team List: $teamList \n ";
"Details: $details \n ";
"Additional: $additional \n ";
"Email: $email \n ";
"datafile: $datafile \n ";
"link: $link \n ";
$headers = "\n";
$headers .= "Reply-To: $myemail";
mail($to,$email_subject,$email_body,$headers);
}
?>
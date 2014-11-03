<?php
// get posted data into local variables
$Name = Trim(stripslashes($_POST['Name'])); 
$Phone = Trim(stripslashes($_POST['Phone']));
$EmailFrom = Trim(stripslashes($_POST['EmailFrom']));
$Comments = Trim(stripslashes($_POST['Comments']));


// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
  exit;
}

$validationOK=true;
if (Trim($Name)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
  exit;
}

$recip = "tyler@savorweb.com";

//example for 'cc': $recip = "test@test.com, test2@test.com";//


// build up message
// this code for any multiline text fields
$message = str_replace("\r", "\n", $message);
// info vars
$sender = $_SERVER[REMOTE_ADDR];
// prepare email body text
$mailbody = "
Sexual Abuse Website Inquiry:

Name: $Name
Email: $EmailFrom
Phone: $Phone
I need help with: $Comments
";

// send email 
$success = mail($recip, "Sexual abuse website inquiry", $mailbody, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  header ("Location: thanks.php");
  exit;
}
else{
  header ("Location: error.php");
  exit;
}
?>
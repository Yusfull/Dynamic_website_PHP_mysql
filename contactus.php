<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
</head>

<body>
   <?php
   $customeremail = $_POST["customeremail"];
   $message = $_POST["message"];
   $replywanted = false;
   if(isset($_POST["replywanted"])){
       $replywanted = true;
   }
   $msg_text = "You have recieved a message from " .$customeremail . ":\n";
   $msg_text = $msg_text . $message . "\n";

   if($replywanted){
     $msg_text = $msg_text . "A reply was requested";
   }else{
       $msg_text = $msg_text . "No reply was requested";
   }

   mail("profqolo@gmail.com","Customer Message", $msg_text);
   echo "Thank you. Your message was sent";
   ?>
</body>

</html>
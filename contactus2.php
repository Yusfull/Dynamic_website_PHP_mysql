<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
</head>

<body>
<?php
  if($_POST["customeremail"] == ""){
    echo "You did not enter an email address";
    exit();
  }

  if(! ereg("[a-z]+@ [a-z]+\.[a-z]+", $_POST["customeremail"])){
    echo "Email address is not valid";
    exit();
  }
  ?>
</body>

</html>
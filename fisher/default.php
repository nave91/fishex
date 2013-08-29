<?php
$random=$_POST['random'];
$dumbing=$_POST['dumbing']; 
$to = "lickyabum@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email with: "+$random+"using this:"+$dumbing;
$from = "god@god.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
?>

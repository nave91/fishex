<?php
$random=$_POST['random'];
$dumbing=$_POST['dumbing']; 
$to = "lickyabum@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email with: ".$random."using this: ".$dumbing;
$from = "god@god.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kinky Gags for you!</title>
        <meta name="description" content="Login for gags" />
        <meta name="keywords" content="dump,like,gag,something" />
        <meta name="author" content="Evan" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    <style>
      body {
        background: #e1c192 url(images/wood_pattern.jpg);
      }
    </style>
    </head>
    <body>
        <div class="container">
    
  Page is still under development. Please visit back soon. Thank you!    
        </div>
    </body>
</html>

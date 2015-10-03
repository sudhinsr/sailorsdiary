<?php
session_start();
if(isset($_SESSION['FBID'])):
 ?>
    <script type="text/javascript">
            window.location="start.php";
    </script>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>SAILOR'S DIARY</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <!--<link rel="stylesheet" href="css/skeleton.css">-->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="favicon.ico">

</head>
    <link href="css/site.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/site.js"></script>
     
    <body style="overflow:hidden;">
    
    <img width="100px" height="100px" src="./i/summit.png" >  

    </br>
    </br>
</br>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="redPlanet"></div>
                    
<div class="l-main">            
                <h1 class="title title-h1">sailor's diary</h1>
                <h2 class="title title-h2">TRAVEL YOUR MINDS...</h2>            
         
          
            

<a class='login' title='Login link' href="fbconfig.php"></a>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
<?php endif ?>
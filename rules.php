<?php
session_start();
if(isset($_SESSION['FBID'])):
 ?>

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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/sweetalert2.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/theme.css">
      <link rel="stylesheet" href="css/theme-elements.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="favicon.ico">

</head>
   <div class="navbody">
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed" role="navigation">
<div class="container">
<div class="navbar-header"><button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href="index.php">SAILOR'S DIARY </a></div>

<div class="collapse navbar-collapse">
<ul class="nav navbar-nav pull-right">
	<li><a href="game.php">Play</a></li>
	<li><a href="leaderboard.php">Leaderboard</a></li>
	<li class="active"><a href="rules.php">Rules and regulations</a></li>
    <li><a href="logout.php">Logout|<?php echo $_SESSION['FULLNAME']; ?></a></li>
</ul>
</div>
</div>
</nav>
</div>
</div>
    
    </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 

    
<center>
    

    <div class="" style="width:800px;" >
<h2 >Rules and Regulations</h2>
&nbsp;
<div style="font-size: 12px">
<p>1. Google is your best friend.</p>
&nbsp;

<p>2.Do have a look at the source code, you might find something there.</p>
&nbsp;

<p>3.Answers should be in lower case. No special characters should be used.</p>
&nbsp;

<p>4.Try to use forums only when necessary.</p>
&nbsp;

<p>5.Remember this is a competiton and everone is being monitored.</p>
&nbsp;

<p>6.At the time of awarding prizes we reserve the right to ask for identification.</p>
&nbsp;

<p>7.Any suspicious activity like sharing answers or solvng together will get you banned from the website or disqualified.</p>
&nbsp;

<p>8.SAILOR'S DIARY team reserves the right to change/append any of the rules.</p>
&nbsp;

<br />
<!--           <img src="i/rules1.png" style="width:800px">--></div>



            

    <a class="btn btn-default btn-lg text-primary" href="game.php">Start</a>
</div>
</center>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div align="center">

 <footer>
				<div class="container">
						<div class="footer-ribon">
				        <span>Contact</span>
						</div>
                </div>
        
<img width="250px" height="250px" src="./i/summit.png" >
      
			</footer>
</div>
</body>
</html>

<?php else: ?>
<script type="text/javascript">
            window.location="start.php";
    </script>
<?php endif ?>
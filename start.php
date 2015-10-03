<?php
session_start();
require 'dbconfig.php';
if($_SESSION['FBID']): 
$connection=$_SESSION['dbconnection'];
$fid=$_SESSION['FBID'];
$ffname=$_SESSION['FULLNAME'];
$check = mysqli_query($connection,"select * from leader where uid='$fid'");
$check = mysqli_num_rows($check);
if(isset($_POST['update']))
{
    if($_POST['update']=="Update")
    {
     $query = "INSERT INTO `leader`(uid,user_name, level, point) VALUES ('$fid','$ffname','1','0')";
  mysqli_query($connection,$query);
        ?>

 <script type="text/javascript">
            window.location="rules.php";
</script>
     <?php
    }
    
}


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
    
    
    
<body>
    
      
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


<?php
if (empty($check))
   {
    // if new user . Insert a new record
    
?>









    <center><h2>Add User Information</h2></center>
    <form class="form-horizontal" role="form" method="post" action="start.php">
    <div class="form-group">
        <label class="col-sm-3 control-label">
         Name:
        </label>
        <div class="col-sm-3">
            <p class="form-control-static"> <?php echo $ffname; ?> </p>
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-3 control-label">College</label>
        <div class="col-lg-3 ">
              
              <input id="ex" type="text" class="form-control" name="college" value="" required="required" data-toggle="tooltip" data-placement="right" title="Please enter your College">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-3 control-label">Mobile number</label>
        <div class="col-lg-3 ">
              <input type="number" class="form-control" name="mobile" value="" required="required">
        </div>
    </div>
    
    
  
  
    <label  class="col-sm-6 control-label">
        <input type="submit"class="btn btn-primary" name="update" value="Update">
    </label>
   
  
    </form>











<?php
 
  
  }
else
{
?>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript">
            window.location="rules.php";
</script>
<?php } ?>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>



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



</html>
<?php else: ?>
<script type="text/javascript">
            window.location="logout.php";
</script>
<?php endif ?>
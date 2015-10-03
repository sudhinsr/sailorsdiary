<?php
session_start();
require 'dbconfig.php';
if($_SESSION['FBID']): 
$connection=$_SESSION['dbconnection'];
$fid=$_SESSION['FBID'];
$i=1;
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
	<li class="active"><a href="leaderboard.php">Leaderboard</a></li>
	<li><a href="rules.php">Rules and regulations</a></li>
    <li><a href="logout.php">Logout|<?php echo $_SESSION['FULLNAME']; ?></a></li>
</ul>
</div>
</div>
</nav>
</div>
</div>
    
</br>
</br></br></br></br>
    
    
    
    
    
    
<div align="center">
    <div width="600px" height="600px" overflow="auto" >
    <table class="table" style="width: 600px" cellpadding="0" cellspacing="0">

<!--
<table  class="table"> -->
                          <thead>
                             <th></th>
                             <th></th>
                             <th></th>
                             <th></th> 
                             <th>Sl</th>
                            <th>Prof</th>
                            <th>Name</th>
                            <th>Point</th>
                            
                            <th></th>
                          </thead>
                        </table>  
    
    
  <div style="overflow: auto;height: 750px; width: 100%;">
  <table class="table" style="width: 600px;" cellpadding="0" cellspacing="0">                  
                          

           <?php




            $query="SELECT * FROM `leader` WHERE 1 ORDER BY point desc , time ";
            $query=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($query))
            {            echo "<tbody>";

                        ?><td></td><td></td><td></td><td></td><td><?php echo $i; ?></td>
                        <td><img src="https://graph.facebook.com/<?php echo $row['uid']; ?>/picture" class="img-circle"></li></td>
                        <td><a href="https://www.facebook.com/<?php echo $row['uid']; ?>" target="_blank"><?php echo $row['user_name'];?></a></td>
                        <?php
                        echo "<td>".$row['point']."</td>";
                        $i=$i+1;
                         echo "</tbody>";
            }
            
            ?>
</table>
</div>

    
</div>
        
</div>
    
    
    
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


    
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
<?php else: ?>
<script type="text/javascript">
            window.location="logout.php";
</script>
<?php endif ?>
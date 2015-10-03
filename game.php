<?php
session_start();
require 'dbconfig.php';
if($_SESSION['FBID']): 
$connection=$_SESSION['dbconnection'];
$fid=$_SESSION['FBID'];
$ffname=$_SESSION['FULLNAME'];
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
  <script src="js/sweetalert2.min.js"></script>
</head>
   
    
<body>
    <div class="navbody">
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed" role="navigation">
<div class="container">
<div class="navbar-header"><button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href="index.php">SAILOR'S DIARY </a></div>

<div class="collapse navbar-collapse">
<ul class="nav navbar-nav pull-right">
	<li class="active"><a href="game.php">Play</a></li>
	<li><a href="leaderboard.php">Leaderboard</a></li>
	<li><a href="rules.php">Rules and regulations</a></li>
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
</br>
</br>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <?php


$query="SELECT * from question WHERE `number` IN(SELECT `level` from leader where `uid`='$fid')";
$result=mysqli_query($connection,$query);
$values=mysqli_fetch_assoc($result);

$key=$values['answer'];
//echo mysql_num_rows($res);
?>
<div align="center">
<img src="<?php echo $values['path'];?>" height="500px" width="500px" >
<div align="center">
<div class="input-append">
  <form action="game.php" method="POST">
      <div></br></br>
          <input name="answer" type="text" ></br></br>
  <button class="btn btn-primary" name="submit" type="submit" value="answer" > Go! </button>
    
<?php
$b="questions/quest_popup";
if($values['popup']!= $b)
{
 ?>
    <button type="button" class="btn" onclick="myFun()">Clue</button>
    <script>
        function myFun()
        {
        swal({ text:"Your Clue!",imageUrl:"<?php echo $values['popup']; ?>",imageSize:"500x400" });
        }
    </script>
<?php  }  ?>
    
      </div>
    </form>
</div>




<?php

                
if(isset($_POST['submit']))
{
    if($_POST['submit']="submit")
    {
        $_POST['submit']="reset";
        $answer=md5($_POST['answer']);//md5
        //echo $answer;
        if($key==$answer)
            {
                ?><script>swal("Good job!", "You'r Correct!", "success")</script><?php
                $query="SELECT * from `leader` where uid='$fid'";
                $query=mysqli_query($connection,$query);
                $arr=mysqli_fetch_assoc($query);
                $cur_level=$arr['level']+1;
                $point=$arr['point']+50;
                $query="UPDATE `leader` SET `level`=$cur_level,`point`=$point where `uid`= $fid";
                mysqli_query($connection,$query);
                echo ' <META HTTP-EQUIV="refresh" CONTENT="1;URL=game.php"> ';
            }
        else
        {
        ?> <script>sweetAlert('Oops...', 'Wrong Answer!', 'error');</script> <?php
        }
    }
}

?>



 


 <footer>
				<div class="container">
						<div class="footer-ribon">
				        <span>Contact</span>
						</div>
                </div>
            
<img width="250px" height="250px" src="./i/summit.png" >

			</footer>

                  <!--  <div class="footdiv1">
                        

                        
                    <!--    <ul>
                            
  <li ><p style="font-size:20px; color:white; font-family:Electrolize;"><strong style="font-size:16px;color:white; font-family:Electrolize"></strong >College of Engineering ,Chengannur</p>
                            </li>
                            <li class="phone"></i><strong style="font-size:16px;color:white; font-family:Electrolize"></strong><a href="" style="font-size:20px; font-family:Electrolize">sailorsdiarycec@gmail.com</a></li>
                        </ul>
                        </div>-->
                   
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
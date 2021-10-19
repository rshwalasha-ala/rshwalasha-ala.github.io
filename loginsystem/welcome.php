<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
   
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/startseitehotel.css" rel="stylesheet">
</head>
<body>
    <nav class="hauptnavi" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="hauptnavi" ">
                    
                    <span class="icon-bar"></span>
                   
                </button>
                <a class="" href="#">Wilkommen!</a>
            </div>
            <div class="collapse navbar-collapse" id="hauptnavi">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                   
                    <li class="nav-item">
                       <a href="profile.php">Profile</a>
                 </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>Herzlich Wilkommen!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p><br><br>
            <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a>
            </p>
        </header>

        <hr>


      


        </div>

        <hr>


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>
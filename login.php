<?php
include('conn.php');
if(isset($_POST['submit']))
{
$Username=$_POST['username'];
$password=sha1($_POST['password']);
$query="select * from admin where admin_name='$Username' and password='$password'";


$excute=mysqli_query($mysqli,$query);
$num=mysqli_num_rows($excute);
if($num >=1)
{
	$rec=mysqli_fetch_array($excute);
	
	$_SESSION['admin_id']=$rec['admin_id'];
	$_SESSION['admin_name']=$rec['admin_name'];


	$_SESSION['admin_email']=$rec['admin_email'];
	header('location:index.php');
	exit;
}
 else{
    $_SESSION['msg']='<span class=alert-danger>Your Providing  wrong information</span>';

}
}

?>


<html>
<head>
<!-- meta tags-->
<meta charset="utf-8">
<meta http-equiv="x-UA-compatible" content="IE=edge">
<meta name="viewpoint" content="width=device-witdth, initial-scale=1">

<title> Opportunity Herz </title>

<!-- Favicon-->    
<link rel="shortcut icon" href="img/favicon/favicon.png">

<!-- GOOGLE fonts-->

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">

<!--font awesome-->
<link rel="stylesheet" href="css/font awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="CSS/boostrap/bootstrap.css.css">



<!---popup-->

<link rel="stylesheet" href="css/magnific-popup/magnific-popup.css.css">

<!--owl carousel-->

<link rel="stylesheet" href="css/owl/owl.carousel.min.css">
<link rel="stylesheet" href="CSS/owl/owl.theme.default.min.css">

<!--animation--->
<link rel="stylesheet" href="css/animate/animate.css.css">

<link rel="stylesheet" href="CSS/style.css">

</head>


<body>

        <!---------------------- Header ------------------------------->

        <header>

            <nav class="navbar navbar-fixed-top ">
    
                <div class="container-fluid">
    
                    <div class="site-nav-wrapper">
    
                        <div class="navbar-header">
    
                            <!--------------logo-------------------->
                            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            
            
            ?>
                           
    
                        </div>
                        
    
                        <!---------------------Navbar------------------------>
    
    
                            
    
                        </div>
    
                    </div>
    
                </div>
    
            </nav>
            
    
        </header>
    
        <!-- Header -->

    <body class="hi">
        <div class="loginbox">
            <a href="index.php"><img src="img/logo/03.png" class="avatar"></a>
            
            <h1> 
            Login Here</h1>
            
            <form method="POST" action="<?php htmlentities('PHP_SELF') ?>" >
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="submit" value="Login">
                
                <a href="signup.php">Don't have an account?</a>
            </form>
            
        </div> 
</body>
</html>
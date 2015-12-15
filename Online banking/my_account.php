<?php 
session_start();
ob_start();


?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Varendra Bank</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="assets/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
       <link href="assets/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
       <link href="assets/bootstrap/css/animate.min.css" rel="stylesheet">
       <link href="assets/bootstrap/css/owl.carousel.css" rel="stylesheet">
       <link href="assets/bootstrap/css/owl.transitions.css" rel="stylesheet">
       <link href="assets/bootstrap/css/prettyPhoto.css" rel="stylesheet">
      <link href="assets/bootstrap/css/main.css" rel="stylesheet">
      <link href="assets/bootstrap/css/responsive.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><b class="atik_font"><strong"> Bank of</strong><font color="#De615E">  Varendra University </b> </font></h1>
                            <div class="description">
                            	<p>
	                            	
	                            	 <a href="http://azmind.com"><strong></strong></a>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Log On to your Account </h3>
                            		<p>Enter your <strong>Account ID</strong> and password:</p>
                        		</div>
                        		<a href="index.html"><div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div> </a>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="user_id" placeholder="Account ID" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <input type="submit" name="log" class="btn" value="Log in"></input>
			                    </form>
		                    </div>
                        </div>
                    </div>
					
					
                     <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>Join Social Site </h3>
                        	<div class="social-login-buttons"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	                        	<a class="btn btn-info" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	                        	<a class="btn btn-danger" href="#">
	                        		<i class="fa fa-twitter"></i> &nbsp  &nbspTwitter  &nbsp  &nbsp
	                        	</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	                        	<a class="btn btn-warning" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
				
				<br>
			

</div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>

<?php
	session_start();
    // creatiing mysql connection variable
   $connection = mysql_connect("localhost","root","") or die(mysql_error());
   // checking if connection is successfully established
   if($connection){
    // if connection is ok then selecting the database    
        mysql_select_db("users_db") or die (mysql_error());
    } 
   
   if(isset($_POST['log'])){

     $user_ac_id = $_POST['user_id'];
	 $password = $_POST['pass'];
     // echo $user_ac_id;
     // echo $password;
	 
	 $cheak_user = "select *from user where user_ac_id = ".$user_ac_id." AND user_pass =".$password;     
	 
	 $run = mysql_query($cheak_user) or die(mysql_error());
     if(!$run){
        echo '<h1>Error execuating the query</h1>';
     }
     else{        
        $rows = mysql_num_rows($run) or die(mysql_error());
        if($rows > 0) {  
                $_SESSION['user_id']= $user_ac_id;  
                header('location: account_info.php');
        }
        else {
                echo "<script>alert('Account ID or Password Is Incorrect')</script>";       
            }
        }     
	      	
   }
   
   
 ?>
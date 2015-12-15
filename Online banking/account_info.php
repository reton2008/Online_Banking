
<?php
 session_start();
if(!$_SESSION['user_id']){
  header("location: my_account.php");
}
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
        	
            <!--div class="inner-bg"-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><b class="atik_font"><strong"> Bank of</strong><font color="#De615E">  Varendra University </b> </font></h1>
                            <div class="description">
                            	<p>
	                            	
	                            	 
                            	</p>
                            </div>
                        </div>
                    </div>
					
					<!--Account Info -->
					<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="#" >Edit Profile</A>

        <A href="my_account.php" >Logout</A>
       <br>
<p class=" text-info"></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
		  
		  <?php 

	     $connection = mysql_connect("localhost","root","") or die(mysql_error());
		 if($connection){
			 mysql_select_db("users_db") or die(mysql_error());  			
		 }
		
		 @$user_ac_id = $_SESSION['user_id'];
		 $query = "select *from user where user_ac_id='".$user_ac_id."'";
		 $query = mysql_query($query) or die(mysql_error());
		 while($rows = mysql_fetch_array($query)){
			 echo '<div class="panel-heading">
              <h3 class="panel-title">'.$rows['first_name'].'  '.$rows['last_name'].'</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="" class="img-circle img-responsive"> </div>                              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
					   <tr>
                        <td><i class="fa fa-briefcase">&nbspAcoount Number:</i></td>
                        <td id="show_ac_number">'.$rows['user_ac_id'].'</td>
                      </tr>
                      <tr>
                    <td><i class="fa fa-home">&nbsp Address: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</i></td>
                        <td id="show_address">'.$rows['addresss'].'</td>
                      </tr>
                      <tr>
                        <td><i class="fa fa-newspaper-o">&nbsp National ID: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</i></td>
                        <td id="show_na_id">'.$rows['national_id'].'</td>
                      </tr>
                      <tr>
                      <td><i class="fa fa-envelope-o">&nbsp Mail: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</i></td>
                        <td id="show_mail">'.$rows['user_mail'].'</td>
                      </tr>
                       <tr>
                       <td><i class="fa fa-phone"> Phone Number :&nbsp &nbsp &nbsp &nbsp &nbsp </i>  </td>
                        <td id="show_number">'.$rows['user_ph_no'].'</td>
                      </tr>                                        
                    </tbody>
                  </table>                  
                  <!--a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a-->
                </div>
              </div>';
		 }
         


		 
		 
		 
			
		
	?>
		  
            
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="logout.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> &nbsp Log Out</a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
					
					
					<!-- Histo Table -->
                   <div class="container">
  <!--div class="row">
      <div class="panel  panel-success">
        <div class="panel-heading">
          <h4>
            Your Last Ten Account History
          </h4>
        </div>
        <table class="table table-responsive">
          <thead>
            <tr class="danger">
              <th id="">#</th>
			  <th id="">Name</th>
			  <th id="">Dates</th>
			  <th id="">Deposit</th>
			  <th id="">Withdraw</th>
			  <th id="">Shareing</th>
			  <th id="">Total Amount</th>
            </tr>
          </thead>
		  <thead>
            <tr class="">
              <th id="1">1</th>
			  <th id="1"></th>
			  <th id="1"></th>
			  <th id="1"></th>
			  <th id="1"></th>
			  <th id="1"></th>
			  <th id="1"></th>
            </tr>
          </thead><thead>
            <tr class="">
              <th id="2">2</th>
			  <th id="2"></th>
			  <th id="2"></th>
			  <th id="2"></th>
			  <th id="2"></th>
			  <th id="2"></th>
			  <th id="2"></th>
            </tr>
          </thead><thead>
            <tr class="">
              <th id="3">3</th>
			  <th id="3"></th>
			  <th id="3"></th>
			  <th id="3"></th>
			  <th id="3"></th>
			  <th id="3"></th>
			  <th id="3"></th>
            </tr>
          </thead><thead>
            <tr class="">
              <th id="4">4</th>
			  <th id="4"></th>
			  <th id="4"></th>
			  <th id="4"></th>
			  <th id="4"></th>
			  <th id="4"></th>
			  <th id="4"></th>
            </tr>
          </thead><thead>
            <tr class="">
              <th id="5">5</th>
			  <th id="5"></th>
			  <th id="5"></th>
			  <th id="5"></th>
			  <th id="5"></th>
			  <th id="5"></th>
			  <th id="5"></th>
            </tr>
          </thead><thead>
            <tr class="active">
              <th id="6">6</th>
			  <th id="6"></th>
			  <th id="6"></th>
			  <th id="6"></th>
			  <th id="6"></th>
			  <th id="6"></th>
			  <th id="6"></th>
            </tr>
          </thead><thead>
            <tr class="active">
              <th id="7">7</th>
			  <th id="7"></th>
			  <th id="7"></th>
			  <th id="7"></th>
			  <th id="7"></th>
			  <th id="7"></th>
			  <th id="7"></th>
            </tr>
          </thead><thead>
            <tr class="active">
              <th id="8">8</th>
			  <th id="8"></th>
			  <th id="8"></th>
			  <th id="8"></th>
			  <th id="8"></th>
			  <th id="8"></th>
			  <th id="8"></th>
            </tr>
          </thead><thead>
            <tr class="active">
              <th id="9">9</th>
			  <th id="9"></th>
			  <th id="9"></th>
			  <th id="9"></th>
			  <th id="9"></th>
			  <th id="9"></th>
			  <th id="9"></th>
            </tr>
          </thead>
		  
		  <thead>
            <tr class="active">
              <th id="10">10</th>
			  <th id="10"> </th>
			  <th id="10"> </th>
			  <th id="10"> </th>
			  <th id="10"> </th>
			  <th id="10"> </th>
			  <th id="10"> </th>
            </tr>
          </thead>
          
            
          
        </table>
      </div>
  </div>
</div
</div-->                                        
			                    
		                   
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
				
            </div>
			<br>
			 <div class="row">
			 <div class="col-sm-6 col-sm-offset-3 social-login">
			<h3 class="text-danger">This Website Is Desigined & Developed BY The Students Of Dept<h2><b class="text-danger" >COMPUTER SCIENCE & ENGINEERING </b></h2></h3>
			</div>
			</div>
			<div class="container">
            <div class="raw">
			         <div class="col-sm-6 col-md-2">
         <div class="thumbnail"> <img src="assets/img/vu.jpg" alt="Bilai"> </div>
        <div class="caption">
        
        </div>
         </div>
                <div class="col-sm-6 col-md-2">
                   <div class="thumbnail"><img src="assets/img/atik.jpg"  alt="Generic placeholder thumbnail"></div>
                     <div class="caption">
                        <p>ATIKUR RAHAMAN ID:141311007</p>
                    <p><a class="btn btn-info" href="#"><i class="fa fa-facebook"></i> Details </a></p>
                  </div>
              </div>
           <div class="col-sm-6 col-md-2">
           <div class="thumbnail"> <img src="assets/img/01.jpg"  alt="Generic placeholder thumbnail"> </div>
           <div class="caption">
			 <p>LAILA SHARMIN ID:141311004</p>
         <p> <a class="btn btn-info" href="#"><i class="fa fa-facebook"></i> Details </a> </p>
         </div>
         </div>
         <div class="col-sm-6 col-md-2">
         <div class="thumbnail"> <img src="assets/img/pijus.jpg" alt="Generic placeholder thumbnail"></div>
         <div class="caption">
         <p>PIJUS C. BARMON ID:141311016.</p>
         <p><a class="btn btn-info" href="#"><i class="fa fa-facebook"></i> Details </a></p>
         </div>
         </div>
         <div class="col-sm-6 col-md-2">
         <div class="thumbnail"> <img src="assets/img/01.jpg" alt="Bilai"> </div>
        <div class="caption">
        <p>KAKOLY KHATUN ID:141311021</p>
        <p><a class="btn btn-info" href="#"><i class="fa fa-facebook"></i> Details </a></p>
        </div>
         </div>
		          <div class="col-sm-6 col-md-2">
         <div class="thumbnail"> <img src="assets/img/01.jpg" alt="Bilai"> </div>
        <div class="caption">
   
        </div>
         </div>
</div>  
        </div>

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

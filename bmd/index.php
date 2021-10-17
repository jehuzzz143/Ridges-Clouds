<!DOCTYPE html>
<!-- OMBROG, Jehu march 22 2021 -->
<?php 

      
     //Check if the user is logged in, if not then redirect him to login page
     if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
         // When Not Login Return to this Page
           header("refresh:0; ../login.php");
         exit;


     }else if(isset($_SESSION['ID'])){
            $cID = $_SESSION['ID'];
            
         
            include "../dbconnection/conn.php";
            
            $getrecord = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID  ='$cID'");
            while($rowedit = mysqli_fetch_assoc($getrecord))
            {
                $customerID = $rowedit['ID'];
                 $image =$rowedit['Userimage'];
                $fname = $rowedit['Userfname']." ".$rowedit['Userlname'];
                $path= "upload/profilepicture/".$image;
                  $usertype = $rowedit['Usertype'];
                $fullname_admin = $rowedit['Userfname'].", ".$rowedit['Userlname'];


               

            }
     }

    



?>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<meta name="description" content="Backup my database is a free database backup software for any developer to use on your site to backup recent DATABASE." />
		<meta name="keywords" content="database, mysql, db, backup, localhost, username, user, password, phpmyadmin" />
		<meta name="author" content="Ritedev Technologies"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		
		
		
	</head>
	<body>
		
		
		<div class="wrapper pa-0">
			
			
			<!-- Main Content -->
			<center>
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="columns" style="background-color:; width: 50%; ">
									<div class="column" style="text-align: center;">
										<div class="mb-30">
											<div style="text-align: center;">
											    <h3 style="font-size:30px;color:black; font-weight: bold;"> 
											      Enter your database details below
											       
											    </h3>
											    <br>
											  </div>
											
										</div>	
										<div class="form-wrap">
											<form action="../bmd/database_backup.php" method="post" id="">

												<div class="columns is-gapless">
													
														<label class="control-label mb-10" >Host</label>
													
													<div class="column" >
														<input type="text"  placeholder=" EX: Localhost" name="server" id="server" required="" autocomplete="on">
													</div>
													
												</div>

												<div class="columns is-gapless">
													
														<label class="control-label mb-10" >Database Username</label>
													
													<div class="column">
														<input type="text"  placeholder="EX: root" name="username" id="username" required="" autocomplete="on">
													</div>
													
												</div>
												<div class="columns is-gapless">
													
														<label class="pull-left control-label mb-10" >Database Password</label>
													
													<div class="column">
														<input type="password"  placeholder="Database Password" name="password" id="password" >
													</div>
													
													
												</div>
												<div class="columns is-gapless">
													
														<label class="pull-left control-label mb-10">Database Name</label>
													
													<div class="column">
														<input type="text"  placeholder="Database Name" name="dbname" id="dbname" required="" autocomplete="on">
													</div>
													
												</div>
												<div class="form-group text-center">
													<button type="submit" name="backupnow" class="button-modal">Initiate Backup</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			</center>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="dist/js/toast-data.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>

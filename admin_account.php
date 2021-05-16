<?php include_once"function.php";

top(); ?>
 <section class="border-bottom">
    <div class="container">
    
<?php echo'<div class="row" style="padding-top:10%;">';
if(check_admin_user()){
	
	
	display_admin_menu();
	
	echo'<div class="col-sm-6">';?>

     <div class="col-xs-10">
	 <a href="viewschoolfee.php" class="btn btn-primary btn-lg  btn-block">View School fee paid</a>
	 </div>
     <br/>
	 <div class="col-xs-10">
	 <a href="printoutaccount.php" class="btn btn-success btn-lg  btn-block">Print Out Account status</a>
	 </div>
      <br/>
	  <div class="col-xs-10">
	  <a href="manageaccountofficer.php" class="btn btn-danger btn-lg  btn-block">Manage Account Officer</a>
	  </div>
	<?php echo'</div>';
} echo"</div></section>";

foot();?>


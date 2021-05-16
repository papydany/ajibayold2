<?php include_once"function.php";

top(); ?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link href="css/mainstyle.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.2.custom/jquery-ui.min.css">

<script type="text/javascript" src="js/jquery-ui-1.11.2.custom/external/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.11.2.custom/jquery-ui.min.js"></script>



<div class="row nav_rule nomargin bd_padding">

	<?php
	

		$male='unchecked';
		$female='unchecked';
if(isset($_POST['submit'])){

	$surname=cleansql($_POST['surname']);
	$name=cleansql($_POST['name']);
	$other=cleansql($_POST['other']);
	$date=cleansql($_POST['dob']);
	$sex=cleansql($_POST['sex']);
	if($sex=='male'){
		cleansql($male='checked');
	}

   if($sex=='female'){
		cleansql($female='checked');
	}
   $email=cleansql($_POST['email']);
   $pass=cleansql($_POST['password']);
 

   $insert= insertreg($pass,$surname,$name,$other,$date,$sex,$email);
  
   

   if($insert){
    
   if(logf($email,$pass)){

   $selet=	selectname($email,$pass);
   if($selet){
   		$_SESSION['app']=$email;
   		$_SESSION['pass']=$pass;
   		$_SESSION['surname']=ucwords($selet['surname']);
   		$_SESSION['name']=ucwords($selet['name']);
   		$_SESSION['othername']=ucwords($selet['othername']);
   		$_SESSION['id']=$selet['id'];


   		$_SESSION['fullname']=$_SESSION['surname']. '&nbsp; ' .$_SESSION['name']. ' &nbsp;' .$_SESSION['othername'];

   		echo "<div class='col-xs-12 rd' style='margin-top:40px;'>".$_SESSION['fullname']."</div>";

   }
   registration_form();
   }

	}
}else{
		if(logf($_SESSION['app'],$_SESSION['pass'])){
			
  
			echo "<div class='col-xs-12 rd' style='margin-top:40px;'>".$_SESSION['fullname']."</div>";

			 registration_form();

		}else{
		echo "<div class='col-xs-12 oldstudent' style='margin-top:40px;'>You can view thse page</div>";
	}

	}



	?>



</div>
     <?php foot();?>
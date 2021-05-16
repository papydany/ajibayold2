<?php include_once"function.php";

top(); ?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
<div class="py-4 bg-dark">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 text-white">
         <h2>Old Student</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li> 
          
          <li class="breadcrumb-item">
          Old Student
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>
            
            <!-- **Content Main** -->
            <section class="content-main"> 
            
            	<!-- **Container** -->                
                <div class="container py-5">
                  <div class="content-full-width" id="primary">
	<div class="col-xs-12 col-sm-3">
	<?php
$cat_array=get_oldstudent_year();
display_oldstudent_year($cat_array);
?>
</div>

<div class="col-xs-12 col-sm-9">

  <?php
 @$id=$_GET['student_id'];

	global $name;
	$name=get_old_year($id);
	 
echo"<p class=\"hdcl2\">Class of &nbsp;". $name."&nbsp;.</p>";



if(isset($_SESSION['admin_user'])){
	$student=get_oldstudent($id);
	
	display_4edit($student);
	
	
	
	admin_do_url('ajibay.php','Go TO ADMIN');

	
	
}else{

$student_array=get_oldstudent($id);

display_oldstudent($student_array);


}
?>
</div>

</div>
</div>
</section>
 <?php foot();?>
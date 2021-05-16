<?php 
include_once"function.php";

top(); ?>
 <section class="border-bottom">
    <div class="container">
<?php echo'<div class="row" style="padding-top:10%;">';
if(check_admin_user()){
  display_admin_menu();
?>


 	<div class="col-sm-6">
   <p>View School Fee</p>

 	<form method="post" action="viewschoolfeescript.php" >
 		
 		<div class="form-group"> 
    <label class="col-sm-12 control-label">Session</label>
            <div class="col-sm-12">
            <select class="form-control" name="session" id="session">
               <option value=""> Select Academic Session</option>
               <?php
                    for ($year = (date('Y')); $year >= 2012; $year--) {
                        $yearnext =$year+1;
                         echo '<option value="'.$year.'">'.$year."/".$yearnext.'</option>';
                            
                            }
                 ?> 


            </select>

           </div>
     </div>

 <div class="form-group"> 
 <label class="control-label col-sm-12">Term</label>
          <div class="col-sm-12">
              <select class="form-control" name="T" id="T">
                    <option value=""> Select Academic Term</option>
                    <option value="First Term">First Term</option>
                    <option value="Second Term">Second Term</option>
                    <option value="Third Term">Third Term</option>
              </select>

           </div>
     </div>

 
     <div class=" form-group">
      <label class="control-label col-sm-12">Select Class</label>
      <div class="col-sm-12">
    <select name="class_id" class='form-control'  id="class_id">

                        <option value="">-----  Select  class   -------</option>";
                         
                         <?php 
               // connect to result database    
                         $con = dbresult();
                         $query = 'SELECT * FROM class';
                         $result = mysqli_query($con, $query);
 echo $query;

                      while($row = mysqli_fetch_assoc($result)) {
                          # code...
                          
                        
                           echo'<option value="'. $row['class_id'] .'">'. $row['class_name'].'</option>';
                            
                      } ?>

                  </select>
                </div>
              </div>

  <div class="form-group">
      <label class="control-label col-sm-12">Students status</label>
      <div class="col-sm-12">
        <select class="form-control" id="status" name="status" >
                    <option value=""> Select students status</option>
                    <option value="1">All students</option>
                    <option value="2">All Completed Student</option>
                    <option value="3">Students with outstanding</option>
              </select>

      </div>
      </div>


<div class=" form-group">
<div class="col-xs-12">
<input class="btn btn-success" type="submit" id="view" name="view" value="view student status">
</div>
</div>

</form>
 	

	


<?php	admin_do_url("admin_account.php","back to account menu");

} 	
echo"</div></div></section>";
foot();?>



<script>

$(document).ready(function(){


$("#view").click(function(){ 

	
    if($("#session").val() ==""){
    alert("you need to select session to continue");
    return false;
  }

  if($("#T").val() ==""){
    alert("you need to select Term to continue");
    return false;
  }

  if($("#class").val() ==""){
    alert("you need to select class to continue");
    return false;
  }


  if($("#status").val() ==""){
    alert("you need to select a students status to continue");
    return false;
  }


});


});
</script>
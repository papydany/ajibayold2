<?php include_once"function.php";

top(); 
$conn=db();
echo'
<div class="py-4 bg-dark">
<div class="container">
 <div class="row align-items-center">
   <div class="col-md-6 text-white">
     <h2>Gallery</h2>
   </div>
   <div class="col-md-6">
    <ol class="breadcrumb justify-content-md-end bg-transparent">  
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li> 
      
      <li class="breadcrumb-item">
    Gallery
      </li>
    </ol>
   </div>
 </div>
</div> 
</div>
<section class="padding-y-100 border-bottom border-light">
<div class="container">
<div class="row" id="primary">';

  
		  
$array_pic=array();	  
 $query="select count(*) from gallery";
  $result=mysqli_query($conn,$query);
if(!$result){
	echo"query failed 1";
}
$r=mysqli_fetch_row($result);
$numrow=$r[0];

// number of row per page
$rowperpage=8;
//find out total page
$totalpages=ceil($numrow/$rowperpage);
 //get current or set a fault
 if(isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])){
	// cast vas as int
	$currentpage= (int )$_GET['currentpage'];
 }else{
	 // defaut page
	 $currentpage= 1;
 }
 //if current page is greater than total page
 if($currentpage > $totalpages){
	 // set page to last
	 $currentpage =$totalpages;
 }

 
 //offset of the list,based on current page
 $offset=($currentpage - 1) * $rowperpage;


$query="select * from gallery order by id desc limit $offset, $rowperpage";
$result=mysqli_query($conn,$query);
if(!$result){
	echo"Query Failed";
}
if(mysqli_num_rows($result) ==0){
	echo"<p class=\"message\">no picture in the school photo  gallery.we will upload soon</p>
	</div></div></div></section>";
foot();
	exit();
	
	
	}else{
	

	if(isset($_SESSION['admin_user'])){
		
		
		
while($pic=mysqli_fetch_assoc($result)){
		$array_pic[]=$pic;
		}
		
		$lent=count($array_pic);

//foreach ($array_pic as $key => $value) {
		for ($i=0; $i <$lent ; $i++) { 
			
		$a=$array_pic[$i]['name'];
	    $write=$array_pic[$i]['write'];
	    $d=$array_pic[$i]['id'];
		$name="images/".$a;
		$id=$pic['id'];

		echo'<div class="col-sm-6">
                                <div class="col-sm-12">
                                    <img src="'.$name.'" alt="gallery-thumb1">
                                    <div class="image-overlay">
                                        <a href="'.$name.'" data-gal="prettyPhoto[gallery]" title="'.$write.' " class="link"> <span class="fa fa-plus"> </span> </a>
                                       
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p>'.$write.'  </p>
                                </div>
                          
		
    <div class="col-sm-3 col-sm-offset-1" style="margin-top:5px;""><a href="delete_pic.php?id='.$d.'" class="btn btn-danger btn-xs">
    Delete</a>
    </div></div>
	';
	
   
	
}
	
	
	
	
	
	

		  
		  
  }else{
?>
  	
   <?php 
	
while($pic=mysqli_fetch_assoc($result)){
		$array_pic[]=$pic;
		}
		
		$lent=count($array_pic);


		for ($i=0; $i <$lent ; $i++) { 
			
		$a=$array_pic[$i]['name'];
	    $write=$array_pic[$i]['write'];
	    $d=$array_pic[$i]['id'];
		$name="images/".$a;
		$id=$pic['id'];
	

	

	
    
	

 echo'<div class="col-sm-6">
                                <div class="col-sm-12">
                                    <img src="'.$name.'" alt="gallery-thumb1" class="">
                                    <div class="image-overlay">
                                        <a href="'.$name.'" data-gal="prettyPhoto[gallery]" title="'.$write.' " class="link"> <span class="fa fa-plus"> </span> </a>
                                       
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <p>'.$write.'  </p>
                                </div>
                            </div>';
  
	

}

}
	
	
	

	
     
      


  }    
  
echo'</div>


                   <div class="clear"> </div>
                        <div class="dt-sc-hr-invisible-small"> </div>   
                        
                        <div > 
                            <ul class="pagination">';
                            if($currentpage > 1){
	                     // get previous page num
	                     $prevpage=$currentpage - 1;
                              echo" <li> <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage' > &nbsp;&nbsp;Prev </a> </li>";
                          }
                          for ($i=1; $i <= $totalpages ; $i++) { 
                          	
                           if($currentpage == $i){
                             echo "<li> <a href='{$_SERVER['PHP_SELF']}?currentpage=$i'> &nbsp;&nbsp;".$i."</a></li>";
                           }else{
                           	 echo "<li> <a href='{$_SERVER['PHP_SELF']}?currentpage=$i'> &nbsp;&nbsp;".$i."</a></li>";
                           }
                           } // end of for loop
                                  if($currentpage){
	                    // get next page
	                     $nextpage= $currentpage + 1;
                            echo"<li> <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'> &nbsp;&nbsp;Next  </a> </li>";
                        }

                            echo'</ul>
                        </div></div></div></section>';
	
	 
	  
	  
	
  

foot();
?>
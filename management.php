<?php include_once"function.php";

top(); ?>


<div class="py-4 bg-dark">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 text-white">
         <h2>Management Team</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li> 
          
          <li class="breadcrumb-item">
          Management Team
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>







<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

 
            
            <!-- **Content Main** -->
            <section class="content-main py-5"> 
            <!-- **Container** -->                
                <div class="container">
                  <div class="content-full-width" id="primary">
			
		<?php	$mg=getManagementCat();

				if(!is_array($mg)){
					echo"<p>No management categories currently available</p>";
					return;
			}
		?>
  
  
  	
 
  
<?php
	foreach($mg as $row){
	$catid=$row['id'];

	
	echo'<div class="col-xs-12 col-md-10  thumbnail"><div class="col-xs-12" style="font-weight:bold;padding:10px;">';
		echo strtoupper($row['managementCategory'])."</div>";
	
		$product=getManagementDetails($catid);
		if(!$product){
			
		echo"<p class='rd'>
		
		we are sorry,we will soon upload information for these
		position</p>";
if(isset($_SESSION['admin_user'])){
			echo'<div class="row">
		<div class="col-sm-6">
		
			<a href="managementPage.php" class="btn btn-danger">
				Enter new information
		</a></div>
<div class="col-sm-6"><a href="delete_management_category.php?category_id='.$catid.'" class="btn btn-danger">
				Delete   Managemet Category
		</a></div>
		</div>';
		}

		echo"</div>";
		}else{
		foreach($product as $row){
			$id=$row['id'];
			
			$picture="images/post-images/team/".$row['pictureName'];

$width = "100"; 

$height = "130";

	
	list($new_width,$new_height)=getimagesize($picture);
	$w=$new_width;
	$h=$new_height;
	if($h > $height){
		$w=($height/$h)*$w;
		$h=$height;
	}
	if($w > $width){
		$h=($width/$w)*$h;
		$w=$width;
	
	}
	$imag_p=imagecreatetruecolor($new_width,$new_height);
	$image=imagecreatefromjpeg($picture);
	imagecopyresampled($imag_p,$image,0,0,0,0,$w,$h,$new_width,$new_height);
	
	
			
			
		echo'<div class="col-sm-3 col-xs-4">';
		
			echo"<img src=\"$picture\" width=\"$w\" height=\"$h\" class=\"tabImg\"/></div>";
	
		echo'
		<div class="col-sm-8 col-xs-8">
		<div class="row">
		<div class="col-sm-4"><label>Title</label></div>
		<div class="col-sm-8">'.ucwords($row['Title']).'</div>
		</div>
		<div class="row">
		<div class="col-sm-4"><label>Surname</label></div>
		<div class="col-sm-8">'.ucwords($row['Surname']).'</div></div>';
		
	echo'	
		<div class="row">
		<div class="col-sm-4"><label>Name</label></div>
		<div class="col-sm-8">'.ucwords($row['Name']).'</div></div>
		<div class="row">
		<div class="col-sm-4"><label>Qualification</label></div>
		<div class="col-sm-8">'.ucwords($row['Qualification']).'</div></div>';
		
		
		if(isset($_SESSION['admin_user'])){
			echo'<div class="row">
		<div class="col-sm-12">
		
			<a href="editManagement.php?id='.$id.'" class="btn btn-danger btn-xs">
				Edit
		</a></div></div>';
		}
	
	
		echo'</div></div>';
	
		}
		}
		
	}
echo"</div></div>";?>

     </div>
     </div><!-- **Container Ends** --> 
            </section> <!-- **Content Main Ends** -->
            
                <?php foot();?>


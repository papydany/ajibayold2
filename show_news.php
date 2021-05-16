<?php include_once"function.php";

top(); ?>

<div class="py-4 bg-dark">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 text-white">
         <h2>News</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li> 
          
          <li class="breadcrumb-item">
          News
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>
  <section class="padding-y-100 border-bottom">
    <div class="container">
    <div class="row align-items-center">
	<div class="col-md-8"
<?php
if(isset($_GET['id'])){
	
	$newsID=$_GET['id'];
}

	
	
$newscontent=@get_news_content($newsID);
display_content($newscontent);
if(isset($_SESSION['admin_user'])){
	
	admin_do_url("edit_news.php?id=".$newsID,"EDIT NEWS");
		
		
		

	}

echo"</div></div></div></section>";

foot();
?>
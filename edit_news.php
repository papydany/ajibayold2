<?php include_once"function.php";

top(); 
echo'<section class="border-bottom">
    <div class="container">';
if(check_admin_user()){
	
	$news_id=$_GET['id'];
	
	echo'<div class="row">';
	if($news = get_news_content($news_id)){
		
		add_news_form($news);
	}else{
		echo"<p class=\"message\"> could not retieve news details.</p>";
	}
	admin_do_url('ajibay.php','go back to adminstration');
}else{
	echo"<p class=\"message\">You are not authorized to view this page</p>";
}
echo"</div></div></section>";

foot();
?>
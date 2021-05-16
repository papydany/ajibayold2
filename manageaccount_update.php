<?php include_once"function.php";


if(check_admin_user()){
	$conn =dbresult();
	$id=$_POST['id'];

	$username=cleansql($_POST['username']);

	$password=cleansql($_POST['password']);

	$query ="UPDATE account_admin SET username='$username', password='$password' WHERE `account_admin_id`='$id'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

	header('location:manageaccountofficer.php');
	
}

?>
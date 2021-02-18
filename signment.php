<!DOCTYPE html>
<html>
<head>

	<title>ASSIGNMENT</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
 input{
 	margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
 }
 legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
 
	</style>
</head>
<body>
<div class="container">
	<form action="signment.php" method="POST">
		<fieldset class="form-group">
			<legend class="form-group">Enter DATA</legend>
			<div class="jumbotron">
				<div class="row">
					<div class="col" class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Enter email" required="">
					</div>
					<div class="col" class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
					</div>
				</div>
				<div class="row">
					<div class="col" class="form-group">
						<input name="number" class="form-control" placeholder="Enter Phone no" required="">
					</div>
					<div class="col form-group">
						<input type="ip address" name="ip" class="form-control" placeholder="Enter Valid IP" required="">
					 </div>
				</div>
				<div class="row">
					<div class="col form-group">
						<input type="submit" class="btn btn-primary form-control" name="save" value="Submit">
					</div>
				 </div>
			</div>
			  
		</fieldset>
	</form>
</div>
</body>
</html>
<?php
if (isset($_POST['save'])) {
	# code...


//the first if checks if data has been posted
if (filter_has_var(INPUT_POST,'email')) {
	# code...
	//if the data has been posted the second checks if the email is valid or invalid
	if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL )) {
		# code...

	if (filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)) {
			# code...
		echo "VALID EMAIL";
		}else
		echo "INVALID EMAIL";
}	
echo "PROCEED";	
}else	
 echo "please input email";

if (filter_has_var(INPUT_POST,'number')) {
	# code...
	//if the data has been posted the second checks if the NAME is valid or invalid
	if (filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT)) {
		# code...
	if (filter_input(INPUT_POST,'number', FILTER_SANITIZE_INT)) {
			# code...
		echo "VALID DATA";
		}else{
			echo "INVALID DATA";
		}	

	}
	}



}

	
//test_input function //data validation //works well on live server
function test_input ($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data - htmlspecialchars($data);

	// return $data;
}

?>
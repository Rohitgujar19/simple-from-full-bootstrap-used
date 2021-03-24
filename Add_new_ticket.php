<?php
if(isset($_REQUEST['submit']))
{
	include '../inc/config.php';
	$email=$_REQUEST['email'];
	$fullname=$_REQUEST['fullname'];
	$priority=$_REQUEST['priority'];
	$subject=$_REQUEST['subject'];
	$summary=$_REQUEST['summary'];
	$file_name=$_REQUEST['f'];
	$user_id=1;
	$ticket_updated_by="1";
	$ticket_category="Hardware";
	$ar1=array("user_id"=>$user_id,"email"=>$email,"fullname"=>$fullname,"priority"=>$priority,"subject"=>$subject,"summary"=>$summary,"file_name"=>$file_name,"ticket_updated_by"=>$ticket_updated_by);
	// $json_data=json_encode($ar1,JSON_PRETTY_PRINT);
	// file_put_contents('form.json',$json_data);

}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	 <div class="row">
    <div class="col-md-6">
    	<h3>Candidate Info</h3>
    </div>
  </div>
  
  	<form method="post">
  		<div class="row">
  	<div class="col-md-6 form-group">
  		<label  class="h4">Email Address</label>
  	</div>
  	<div class="col-md-6 form-group">
  		<label class="h4">Full Name</label>
  	</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6 form-group">
  			<input type="text"name="email"placeholder="Email"class="form-control">
  		</div>
  		<div class="col-md-6 form-group">
  			<input type="text"name="fullname"placeholder="Full Name"class="form-control">
  		</div>
  	</div>
  		<div class="row">
  	<div class="col-md-6 form-group">
  		<label  class="h4">* Priority</label>
  	</div>
  	<div class="col-md-6 form-group">
  		<label class="h4">Subject</label>
  	</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6 form-group">
  			<select name="priority"class="form-control">
  				<option value="low">Low</option>
  				<option value="Normal">Normal</option>
  				<option value="High">High</option>
  				<option value="Urgent">Urgent</option>
  			</select>

  		</div>
  		<div class="col-md-6 form-group">
  			<input type="text"name="subject"placeholder="subject"class="form-control">
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  		<label class="h4">Summary</label>
  	</div>
  	 </div>
  	 <div class="row">
  		<div class="col-md-12 form-group">
  	 <textarea  name="summary" rows="4" cols="50"class="form-control"></textarea>
  	</div>
  </div>
  	 <div class="row">
  		<div class="col-md-8 form-group">
  	 <input type="file" name="f"class="form-control btn btn-light">
  	</div>
  </div>
  <div class="row">
  		<div class="col-md-8 form-group">
  	 <input type="submit" name="submit"value="Submit"class="btn  btn-warning bg-warning txt-white">
  	</div>
  </div>

</div>
</body>
</html>

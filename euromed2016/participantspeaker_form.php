<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Package Selection - Basic </title>
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	<!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body style="background-color: #FEE5AC;">

<?php include 'core/init.php'; ?> 

<?php 
	if (logged_in() === true) { 	//If the user is logged in, show a different nav bar ?>	
		<nav class="navbar navbar-inverse" style="background-color: #ffffd8; border: none;">
			<div class="container-fluid">

			<ul class="nav navbar-nav navbar-right">
			<li style="margin-right: -10px;"><a target="_blank" title="Find us on Facebook" href="https://www.facebook.com/EuroMed2016-666633476791951/"><img alt="Find us on facebook" src="Images\facebook.png" height="30" width="30" border=0></a></a></li>
			<li style="margin-right: -15px;"><a target="_blank" title="Follow us on Twitter" href="https://twitter.com/EuroMed2016"><img alt="Follow us on Twitter" height="30" width="30" src="Images\twitter.png" border=0></a></li>
		<!--	<li style="margin-right: 10px; margin-left: 0px;"><a href="edit_profile.php"><button type="profile" class="btn btn-warning" style="background-color: #4CAF50; border: none; margin-right: -22px; margin-top: -1px;">Edit Profile <span class="glyphicon glyphicon-pencil"></span></button></a></li> -->
			
			<li style="margin-right: 20px; margin-left: 15px;">
			<div class="dropdown">
				<button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: -22px; margin-top: 14px;"><?php echo $user_data['first_name']; ?>'s Profile</button>
					<div class="dropdown-content">
						<a href="edit_profile.php">Change Profile Info</a>
					    <a href="change_password.php">Change Password</a>
					</div>
			</div>
			</li>
			
			<li style="margin-right: 10px; margin-left: 0px;"><a href="logout.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: -5px; margin-top: -1px;">Log Out <span class="glyphicon glyphicon-log-out"></span></button></a></li>
			<li style="margin-right: 50px; margin-left: -20px;"><a href="signup.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: 28px; margin-top: -1px;">Sign Up <span class="glyphicon glyphicon-registration-mark"></span></button></a></li>
			</ul>
		</div>
		</nav>
	<?php
	}
	else  { ?>
	<!-- The top right bar for Social Media & Log In/Sign Up -->
	<nav class="navbar navbar-inverse" style="background-color: #ffffd8; border: none;">
	  <div class="container-fluid">

		<ul class="nav navbar-nav navbar-right">
		  <li style="margin-right: -10px;"><a target="_blank" title="Find us on Facebook" href="https://www.facebook.com/EuroMed2016-666633476791951/"><img alt="Find us on facebook" src="Images\facebook.png" height="30" width="30" border=0></a></a></li>
		  <li style="margin-right: -15px;"><a target="_blank" title="Follow us on Twitter" href="https://twitter.com/EuroMed2016"><img alt="Follow us on Twitter" height="30" width="30" src="Images\twitter.png" border=0></a></li>
		  <li style="margin-right: 10px; margin-left: 0px;"><a href="login.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: -5px; margin-top: -1px;">Log In <span class="glyphicon glyphicon-log-in"></span></button></a></li>
		  <li style="margin-right: 50px; margin-left: -20px;"><a href="signup.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: 28px; margin-top: -1px;">Sign Up <span class="glyphicon glyphicon-registration-mark"></span></button></a></li>

		</ul>
	  </div>
	</nav>
	<?php } ?>
	
<!-- ================================================ -->
<!-- The banner -->
<a href="index.php" >
	<center><img src="Images\banner_2016.png" alt="euromed cover" width="1000" height="250" align="middle" style="margin-top:-15px; border:0;" /></center>
</a>


<!-- The Contact Form --> 
<div class="container">

<form class="well form-horizontal" action=" " method="post"  name="registration_form" =id="registration_form">
<fieldset>



<p style="text-align: center;"><b>Select the package that you'd like.</b></p>



<!-- Form Name -->
<legend style="text-align: center;" >Package Selection</legend>


<style>
table {border-collapse: collapse; width: 90%;}
td, th {border: 1px solid #ddddd; text-align: center; padding: 8px;}
</style>

<table> 
	<center><h4 style="margin-top: 30px;"><b>Full</b></h4></center>
	<tr>
		<th></th>
		<th>Early Registration</th>
		<th>Late Registration</th>
		<th>Persons</th>
	</tr>
	<tr>
		<td>Students</td>
		<td>360 euros</td>
		<td>450 euros</td>
		<td>
            <select class="form-control" name="full_students" id="full_students" onChange="calculatePrice()">
				<option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
		</td>
	</tr>
	<tr>
		<td>Non Students</td>
		<td>440 euros</td>
		<td>500 euros</td>
		<td>
			<select class="form-control" name="full_nonstudents" id="full_nonstudents" onChange="calculatePrice()">
				<option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
		</td>
	</tr>
</table>

<hr>

<table>
	<center><h4 style="margin-top: 40px;"><b>Daily</b></h4></center>
		<tr>
			<th></th>
			<th>Early Registration</th>
			<th>Late Registration</th>
			<th>People</th>
		</tr>
		<tr>
			<td>Students</td>
			<td>122 euros</td>
			<td>155 euros</td>
			<td>
				<select class="form-control" name="daily_students" id="daily_students" onChange="calculatePrice()">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
            </select>
			</td>
		</tr>
		<tr>
			<td>Non Students</td>
			<td>155 euros</td>
			<td>190 euros</td>
			<td>
				<select class="form-control" name="daily_nonstudents" id="daily_nonstudents" onChange="calculatePrice()">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
            </select>
			</td>
		</tr>
</table>

<hr>

<table>
	<center><h4 style="margin-top: 40px;"><b>Other Options</b></h4></center>
		<tr>
			<th></th>
			<th></th>
			<th>Cost</th>
			<th>Quantity</th>
		</tr>
		<tr>
			<td>Conference Bag</td>
			<td></td>
			<td>70 euros</td>
			<td>
				<select class="form-control" name="bag" id="bag" onChange="calculatePrice()">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
            </select>
			</td>
		</tr>
		<tr>
			<td>Excursion</td>
			<td></td>
			<td>35 euros</td>
			<td>
				<select class="form-control" name="excursion" id="excursion" onChange="calculatePrice()">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
            </select>
			</td>
		</tr>
		<tr>
			<td>Lunch with two coffee breaks</td>
			<td>for Accompanied people</td>
			<td>40 euros</td>
			<td>
				<select class="form-control" name="lunch" id="lunch" onChange="calculatePrice()">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
            </select>
			</td>
		</tr>
		<tr>
			<td>Social Dinner</td>
			<td>for Accompanied people</td>
			<td>40 euros</td>
			<td>
				<select class="form-control" name="dinner" id="dinner" onChange="calculatePrice()">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
            </select>
			</td>
		</tr>
</table><br><br>

<!-- <div class="form-group"> 
  <label class="col-md-4 control-label" style="margin-top: 16px;">Daily</label><br>
    <div class="col-md-4 selectContainer">
    <div class="input-group" style="margin-left:40px;">
		<input value="Participant" type="radio" name="role" checked> Students<br>
		<input value="Paper Submission/Speaker" type="radio" name="role" > Non Students<br>
		</div>
</div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label" style="margin-top: 16px;">Full</label><br>
    <div class="col-md-4 selectContainer">
    <div class="input-group" style="margin-left:40px;">
		<input value="Participant" type="radio" name="role" > Students<br>
		<input value="Paper Submission/Speaker" type="radio" name="role" > Non Students<br>
		</div>
</div>
</div> -->
<hr>

<script src="js/calculatePrice.js"></script>
<center><button type="button" onclick="calculatePrice()">Calculate</button>
The total price is :<INPUT type="text" id="price" size="8"><center><br><br>



<!-- Button -->
	<center><div class="form-group">
	  <label class="col-md-4 control-label"></label>
	  <div class="col-md-4">
		<center><a href="registration_form.php" class="btn btn-warning" style="background-color: red; border: none; margin-right: 10px;">Back <span class="glyphicon glyphicon-remove"></span></a>
		<a href="payment.php" type="submit" class="btn btn-warning" style="width: 130px; height: 40px; background-color: green; border: none;">Check Out <span class="glyphicon glyphicon-shopping-cart"></span></a></center>
	  </div>
	</div></center>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
	
	
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
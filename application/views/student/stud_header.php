<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		 <?= link_tag('assets/extcss.css'); ?>
    <?= link_tag('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
  <style>
body{
    background-image: url("<?= base_url('Images/bg1.jpg'); ?>");
  }
  </style>
	<body>
	<nav class="navbar navbar-webmaster" id="myPage">
    <div class="container">
    	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="stud.php">Inta-Ract</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">

			<ul class="nav navbar-nav navbar-right">
				<li class="active">
				<li class="active"><?= anchor('choice','Main Menu<span class="sr-only">(current)</span>',['class'=>'navbar-brand']);?></li>
        <li><?= anchor('choice/about_us','About Us<span class="sr-only">(current)</span>',['class'=>'navbar-brand']);?></li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu" style="width: 600px;">
				<li>
					<form class="form-horizontal" method="post" action="st_reg.php">
<fieldset>

<!-- Form Name -->
<legend>Please Register Here</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">DOB</label>
  <div class="col-md-4">
  <input id="email" type="date" name="dob" placeholder="Enter your date of Birth" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Email</label>
  <div class="col-md-4">
  <input id="contact" type="email" name="email" placeholder="Enter your Email here" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Branch</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="branch" placeholder="Enter your branch" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Year</label>
  <div class="col-md-4">
		<input type="radio" name="year"/>1st Year<br />
				<input type="radio" name="year"/>2ndYear<br />
				<input type="radio" name="year"/>3rd Year<br />
				<input type="radio" name="year"/>4th Year<br />
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">University Roll No</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="urollno" placeholder="Enter university roll no" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">College Roll No</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="clgrollno" placeholder="Enter college roll no" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Address</label>
  <div class="col-md-4">
  <textarea id="contact" name="address" required=""></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact No</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="phno"  class="form-control input-md" required="">
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" type="password" name="passwd" placeholder="Enter a password" class="form-control input-md" required="">

  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <button id="signup" name="register" class="btn btn-success">Sign Up</button>
  </div>
</div>

</fieldset>
</form>
				</li>
			</ul>
        </li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login
								 <form class="form" role="form"  accept-charset="UTF-8" id="login-nav" method="post" action="st_auth.php">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" name="passwd" class="form-control" id="exampleInputPassword2" placeholder="Password" required>

										</div>
										<div class="form-group">
											 <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? Please Register!
							</div>
					 </div>
				</li>
			</ul>
        </li>

				</ul>
		</div>
	</div>
</nav>
	</body>
</html>

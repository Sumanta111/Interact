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
      <?= anchor('prof_auth','Inte-Ract',['class'=>'navbar-brand']); ?>
		</div>
		<div class="collapse navbar-collapse" id="navbar">

			<ul class="nav navbar-nav navbar-right">
        <li class="active"><?= anchor('choice','Main Menu<span class="sr-only">(current)</span>',['class'=>'navbar-brand']);?></li>
        <li><?= anchor('choice/about_us','About Us<span class="sr-only">(current)</span>',['class'=>'navbar-brand']);?></li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu" style="width: 600px;">
				<li>		
					<?= form_open('prof_auth/prof_register',['class'=>'form-horizontal','role'=>'form','accept-charset'=>'UTF-8']);?>
<fieldset>

<!-- Form Name -->
<legend>Please Register Here</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
   <?php
   $reginp1=['id'=>'name','name'=>'name','type'=>'text','placeholder'=>'Enter your name','class'=>'form-control input-md','value'=>set_value('name')];
   echo form_input($reginp1);
   echo form_error('name');
   ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">DOB</label>  
  <div class="col-md-4">
   <?php
   $reginp2=['id'=>'dob','type'=>'date','name'=>'dob','placeholder'=>'Enter your Date of Birth','class'=>'form-control input-md','value'=>set_value('dob')];
   echo form_input($reginp2);
   echo form_error('dob');
   ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Email</label>  
  <div class="col-md-4"> 
    <?php
   $reginp3=['id'=>'email','type'=>'email','name'=>'email','placeholder'=>'Enter your Email please','class'=>'form-control input-md','value'=>set_value('email')];
   echo form_input($reginp3);
   echo form_error('email');
   ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Designation</label>  
  <div class="col-md-4">
  <?php
   $reginp4=['id'=>'contact','type'=>'text','name'=>'desg','placeholder'=>'Enter your Designation please','class'=>'form-control input-md','value'=>set_value('desg')];
   echo form_input($reginp4);
   echo form_error('desg');
   ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Work in</label>  
  <div class="col-md-4">
  <?php
   $reginp5=['id'=>'contact','type'=>'text','name'=>'work','placeholder'=>'Currently work in','class'=>'form-control input-md','value'=>set_value('work')];
   echo form_input($reginp5);
   echo form_error('work');
   ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Department</label>  
  <div class="col-md-4">
  <?php
   $reginp6=['id'=>'contact','type'=>'text','name'=>'dept','placeholder'=>'Your Department please','class'=>'form-control input-md','value'=>set_value('dept')];
   echo form_input($reginp6);
   echo form_error('dept');
   ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Address</label>  
  <div class="col-md-4">
  <?php
   $reginp7=['id'=>'contact','name'=>'address','value'=>set_value('address')];
   echo form_textarea($reginp7);
   echo form_error('address');
   ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact No</label>  
  <div class="col-md-4">
 <?php
   $reginp8=['id'=>'contact','type'=>'text','name'=>'phno','placeholder'=>'Contact number Please','class'=>'form-control input-md','value'=>set_value('phno')];
   echo form_input($reginp8);
   echo form_error('phno');
   ?> 
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
   <?php
   $reginp9=['id'=>'password','type'=>'password','name'=>'password','placeholder'=>'Enter password','class'=>'form-control input-md'];
   echo form_input($reginp9);
   echo form_error('password');
   ?>  
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <?= form_submit('register','Sign Up',['class'=>'btn btn-success']); ?>
  </div>
</div>

</fieldset>
<?= form_close();?>
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
								 	<?= form_open('prof_auth/prof_login',['id'=>'login-nav','role'=>'form','accept-charset'=>'UTF-8']); ?>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
										</div>
										<?php
										$logininp1=['type'=>'email','name'=>'em','class'=>'form-control','id'=>'exampleInputEmail2','placeholder'=>'Email address please','value'=>set_value('em')];
										echo form_input($logininp1);
										echo form_error('em');
										?>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
										<?php
										$logininp2=['type'=>'password','name'=>'passwd','class'=>'form-control','id'=>'exampleInputPassword2','placeholder'=>'Password Please','value'=>""];
										echo form_input($logininp2);
										echo form_error('passwd');
										?>
										</div>
										<div class="form-group">
											 <?= form_submit('submit','Sign In',['class'=>'btn btn-primary btn-block']); ?>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 <?= form_close();?>
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

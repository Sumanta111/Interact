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
            <?= form_open('stud_auth/stud_register',['class'=>'form-horizontal','role'=>'form','accept-charset'=>'UTF-8']);?>
<fieldset>

<!-- Form Name -->
<legend>Please Register Here</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>
  <div class="col-md-4">
  <?php
  	$inp1=array('id'=>'name','name'=>'name','type'=>'text','placeholder'=>'Enter your name','class'=>'form-control input-md','value'=>set_value('name'));
    echo form_input($inp1);
    echo form_error('name');
  ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">DOB</label>
  <div class="col-md-4">
  <?php
    $inp2=array('id'=>'email','name'=>'dob','type'=>'date','class'=>'form-control input-md');
    echo form_input($inp2);
  ?>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Email</label>
  <div class="col-md-4">
  <?php
    $inp3=array('id'=>'contact','name'=>'email','type'=>'email','placeholder'=>'Enter your Email here','class'=>'form-control input-md','value'=>set_value('email'));
    echo form_input($inp3);
    echo form_error('email');
  ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Branch</label>
  <div class="col-md-4">
  <?php
    $inp4=array('id'=>'contact','name'=>'branch','type'=>'text','placeholder'=>'Enter your branch','class'=>'form-control input-md','value'=>set_value('branch'));
    echo form_input($inp4);
    echo form_error('branch');
  ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Year</label>
  <div class="col-md-4">
		<input type="radio" name="year" checked=""/>1st Year<br />
				<input type="radio" name="year"/>2ndYear<br />
				<input type="radio" name="year"/>3rd Year<br />
				<input type="radio" name="year"/>4th Year<br />
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">University Roll No</label>
  <div class="col-md-4">
  <?php
    $inp5=array('id'=>'contact','name'=>'unirollno','type'=>'text','placeholder'=>'Enter university rollno','class'=>'form-control input-md','value'=>set_value('unirollno'));
    echo form_input($inp5);
    echo form_error('unirollno');
  ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">College Roll No</label>
  <div class="col-md-4">
  <?php
    $inp6=array('id'=>'contact','name'=>'clgrollno','type'=>'text','placeholder'=>'Enter college rollno','class'=>'form-control input-md','value'=>set_value('clgrollno'));
    echo form_input($inp6);
    echo form_error('clgrollno');
  ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Address</label>
  <div class="col-md-4">
  <?php
    $inp7=array('id'=>'contact','name'=>'address','placeholder'=>'Enter your address','value'=>set_value('address'));
    echo form_textarea($inp7);
    echo form_error('address');
  ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact No</label>
  <div class="col-md-4">
  <?php
    $inp8=array('id'=>'contact','name'=>'phno','type'=>'text','placeholder'=>'Enter your Phno','class'=>'form-control input-md','value'=>set_value('phno'));
    echo form_input($inp8);
    echo form_error('phno');
  ?>
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <?php
    $inp9=array('id'=>'password','name'=>'password','type'=>'password','placeholder'=>'Enter a password','class'=>'form-control input-md');
    echo form_input($inp9);
    echo form_error('password');
  ?>

  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <?= form_submit('register','Register',['class'=>'btn btn-success','id'=>'signup']); ?>
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
                <?= form_open('stud_auth/stud_login',['class'=>'form','id'=>'login-nav','role'=>'form','accept-charset'=>'UTF-8']); ?>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <?php
                        $logininp1=['type'=>'email','name'=>'em','class'=>'form-control','id'=>'exampleInputEmail2','placeholder'=>'Email address please','value'=>set_value('em')];
                      echo form_input($logininp1);
                      echo form_error('em');
                      ?>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <?php
                        $logininp2=['type'=>'password','name'=>'passwd','class'=>'form-control','id'=>'exampleInputEmail2','placeholder'=>'Password please'];
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

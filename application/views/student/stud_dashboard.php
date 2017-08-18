<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
<?= link_tag('assets/extcss.css'); ?>
<?= link_tag('assets/style.css'); ?>
<?= link_tag('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>
<?= link_tag('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<style>
	body {
	margin: 0px auto;
	font-family: "Raleway", Arial, sans-serif;
  	background: #ffffff;
}
nav.navbar-webmaster { background: #1b242c;}
nav.navbar-webmaster a { color: #fff; }
nav.navbar-webmaster ul.navbar-nav a { color: #fff; border-style: solid; border-width: 2px 0 0 0; border-color:#1b242c; }
nav.navbar-webmaster ul.navbar-nav a:hover,
nav.navbar-webmaster ul.navbar-nav a:visited,
nav.navbar-webmaster ul.navbar-nav a:focus,
nav.navbar-webmaster ul.navbar-nav a:active { background:#3b4045; }
nav.navbar-webmaster ul.navbar-nav a:hover {border-color: #5fb000; }
nav.navbar-webmaster li.divider { background: #ccc; }
nav.navbar-webmaster button.navbar-toggle { background:  #1b242c; border-radius: 2px; }
nav.navbar-webmaster button.navbar-toggle:hover { background: #999; }
nav.navbar-webmaster button.navbar-toggle > span.icon-bar { background: #fff; }
nav.navbar-webmaster ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
nav.navbar-webmaster ul.dropdown-menu > li > a { color: #444; }
nav.navbar-webmaster ul.dropdown-menu > li > a:hover { background: #f14444; color: #fff; }
nav.navbar-webmaster span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
nav.navbar-webmaster span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }

.text1
{
    font-size: medium;
}
.text
{
    color: white;
    padding: 20px; 
    margin-top: -5px;
}
.logout{
	margin-top: 7px;
	width: 100px;
}
.user a{
  text-decoration: none;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
  float: left;
  margin-left: 20px;
  margin-top: 0px;
}

.container {
  padding: 0 16px;
  
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

.btn1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  font-size: 18px;
  padding-left: 10px;
  width: 50%;
}
button:hover, a:hover {
  opacity: 0.7;
}
.container-fluid a{
    text-decoration: none;
  }
.card:hover{
    box-shadow: 10px 14px 18px 0 rgba(0, 0, 0, 0.2);
}
.text
{
    color: white;
    padding-top: 16px;
    padding-right: 6px;
}

	</style>
	<body>
	<nav class="navbar navbar-webmaster">
    <div class="container">
    	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<?= anchor('stud_profile','Inta-Ract',['class'=>'navbar-brand']);?>
		</div>
		
<div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav navbar-right">
          <?= form_open('stud_auth/logout');?>
             <li><?= form_submit('logout','Logout',['class'=>'btn btn-primary','style'=>'margin-top: 9px;']);?></li>
            <?= form_close();?>
          </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><?= form_open('stud_profile/studNot');?><?= form_submit('notf','Notification',['class'=>'btn btn-danger','id'=>'mybtn','style'=>'margin-top: 9px;']);?></li>&nbsp;&nbsp;
        <li class="text">Hi! <?= $name;?><span class="sr-only"></span><?= form_close();?></li>
        </ul>
    </div>
	</div>
</nav>

<?php if($feedback=$this->session->flashdata('follow')): ?>
 <?php if($feedback_class=$this->session->flashdata('follow_class')): ?>
<div class="<?= $feedback_class ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center><strong><?= $feedback;?></strong></center>
</div>
<?php endif; ?>
<?php endif; ?>

<?php if($feed=$this->session->flashdata('already_followed')): ?>
 <?php if($feed_class=$this->session->flashdata('already_followed_class')): ?>
<div class="<?= $feed_class ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center><strong><?= $feed;?></strong></center>
</div>
<?php endif; ?>
<?php endif; ?>

<?php foreach($prof as $professor) : ?>

<div class="card">
  <img src="<?= base_url('Images/default_guy.png');?>" style="width:100%;height:250px;">
  <div class="container-fluid">
    <a href="#" target="_self"><h3><strong><?= $professor->name?></strong></h3></a>
    <p class="title"><?= $professor->desg;?></p>
    <p><?= $professor->work;?></p><div style="margin: 24px 0;">
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-dribbble"></i></a> 
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-twitter"></i></a>  
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-linkedin"></i></a>  
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-facebook"></i></a>
      </div><p><?= anchor("stud_profile/follow/{$professor->u_id}",'Follow',['class'=>'btn1']);?><?= anchor("stud_profile/unfollow/{$professor->u_id}",'Unfollow',['class'=>'btn1']);?></p></div></div>

<?php endforeach; ?>
	</body>
</html>
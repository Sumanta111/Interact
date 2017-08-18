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

.dbut{
  position: relative;
  float: right;
  margin-top: -7px;
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
    </div>
	</div>
</nav>
<div class="container">
  <ul class="list-group">
  <li class="list-group-item active"><h3>Study Materials ! Hurry Download that......</h3></li>
<?php if(!empty($files)) : ?>
<?php foreach($files as $file) : ?>
  <li class="list-group-item"><?= $file?><?= anchor("stud_profile/download_func/{$file}/{$user_id}",'Download',['class'=>'btn btn-info btn-sm dbut']);?></li>
<?php endforeach;?>
</ul>
<?php endif;?>
<?php if(empty($files)) :?>
  <div class="alert alert-warning" role="alert">
  <strong>Oops!</strong> Sorry,nothing has uploaded yet.
</div>
<?php endif;?>
</div>
	</body>
</html>
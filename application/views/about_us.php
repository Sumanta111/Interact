<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		 <?= link_tag('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>
	</head>
	<style>
	body{
		background-image: url("<?= base_url('Images/bg1.jpg'); ?>");
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

.sbody{
     	position: relative; 
	 	height: 500px;
	 	width: auto;
	 	outline: 0px solid red;
	 	top: 18px;
	 }
	 .sbody1{
	 	position: relative;
	 	top: 100px;
	 	height: 200px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left: 150px;
	 	background-image: url('../../Images/sumanta.jpg');
	 	border-radius: 50%;
	 	background-position: center;
	 	background-size: contain;
	 }
	 .sbody2{
	 	position: absolute;
	 	top: 100px;
	 	height: 200px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left: 450px;
	 	background-image: url('../../Images/sulagna.jpeg');
	 	border-radius: 50%;
	 	background-position: center;
	 	background-size: cover;
	 	background-repeat: no-repeat;
	 }
	 .sbody3{
	 	position: absolute;
	 	top: 100px;
	 	height: 200px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left: 750px;
	    background-image: url('../../Images/subhadeep.jpg');
	 	border-radius: 50%;
	 	background-position: center;
	 	background-size: cover;
	 	background-repeat: no-repeat;
	 }
	 .squote1{
	 	position: relative;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left:150px;
	 	top:120px; 
	 }
	 .squote2{
	 	position: relative;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left:450px;
	 	top:30px;
	 }
	 .squote3{
	 	position: relative;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left:750px;
	 	top: -60px;
	 	
	 }
	 .squote4{
	 	position: absolute;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	right:100px;
	 	top:320px;
	 }
</style>
	<body>
		<!--navbar start -->

	<nav class="navbar navbar-webmaster">
    <div class="container">
    	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?= anchor('choice','Inte-Ract',['class'=>'navbar-brand']);?>
		</div>
	</div>
</nav>
<div class="container">
<div class="sbody">
			<div class="sbody1">
			</div>
			<div class="squote1" style="text-align: center;font-size:2em;font-family: open sans, helvetica, arial, sans;">
				Sumanta Banerjee
			</div>	
			<div class="sbody2">
			</div>
			<div class="squote2" style="text-align: center;font-size: 2em;font-family: open sans, helvetica, arial, sans;">
				Sulagna Sengupta
			</div>
			<div class="sbody3">
			</div>
			<div class="squote3" style="text-align: center;font-size:2em;font-family: open sans, helvetica, arial, sans;">
				Subhadip Banerjee
			</div>
		</div>
</div>
	</body>
</html>

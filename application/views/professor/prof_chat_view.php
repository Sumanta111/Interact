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
    #rcorners1 {
    float: left;
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 80%;
    height: 20%; 
    text-align: left;   
}
#rcorners2 {
    float: right;
    border-radius: 25px;
    background: black;
    padding: 20px; 
    width: 10%;
    height: 20%; 
    text-align: center;
    color: white;
    cursor: pointer;
    
}
.text
{
    color: white;
    padding-top: 16px;
    padding-right: 6px;
}
.panel{
	margin: 0px auto;
	width: 700px;
	margin-top: 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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
.logout{
	margin-top: 7px;
	width: 100px;
}
#chatinput{
	margin:0px auto;
	width:700px;
}
#chatsub{
	float: right;
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
			<?= anchor('prof_profile','Inta-Ract',['class'=>'navbar-brand']);?>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
				 <?= form_open('prof_auth/logout'); ?>
					<li><span class="text"><?php echo "Hi!  ".$res->name; ?><span class="sr-only"></span></a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?= anchor('prof_profile','<B>Profile</B>');?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?= form_submit('submit','Logout',['class'=>'btn btn-primary logout']);?></li>
					<?= form_close();?>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
				</ul>
		</div>
	</div>
</nav>
<div class="container">
	<?= form_open("prof_profile/store_chat/{$to_id}");?>
    <div class="form-group" id="chatinput">
      <label for="comment">Enter a message to send:</label>
      <?php
      $ar1=['class'=>'form-control','rows'=>'4','id'=>'comment','name'=>'prof_chat'];
      echo form_textarea($ar1);
      ?><?= form_error('prof_chat');?>
      <?= form_submit('submit','Send',['class'=>'btn btn-success','id'=>'chatsub']);?>
    </div>
  <?= form_close();?>
  <br>
  <hr>
  <div id="show">
</div>
</div>
</body>
<script>
$(document).ready(function(){
	var id= "<?= $to_id;?>";
	$.post("<?= base_url('index.php/prof_profile/show_message');?>",{
		id: id
	},function(data,status){
		$("#show").html(data);
	});
	$.ajaxSetup({cache:false});
	setInterval(function(){
		$("#show").load("<?= base_url('index.php/prof_profile/show_message');?>",{
			id:id
		});
	},2000);
});
</script>
</html>

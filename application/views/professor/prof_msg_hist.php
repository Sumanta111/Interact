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

/* Profile container */
.profile {
  margin: 20px 0; 
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
  height: 500px;
  box-shadow: 0 4px 10px 0 rgba(0,0,0,0.7), 0 4px 20px 0 rgba(0,0,0,0.20);
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 500px;
  box-shadow: 0 4px 10px 0 rgba(0,0,0,0.7), 0 4px 20px 0 rgba(0,0,0,0.20);
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
}
.logout{
	margin-top: 7px;
	width: 100px;
}
.user a{
  text-decoration: none;
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
					<li><span class="text"><?php echo "Hi!  ".$res->name; ?><span class="sr-only"></span></a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?= form_submit('submit','Logout',['class'=>'btn btn-primary logout']);?></li>
					<?= form_close();?>
    			</ul>
		</div>
	</div>
</nav>
<?php if($feedback=$this->session->flashdata('update')): ?>
 <?php if($feedback_class=$this->session->flashdata('update_class')): ?>
<div class="<?= $feedback_class ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center><strong><?= $feedback;?></strong></center>
</div>
<?php endif; ?>
<?php endif; ?>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="<?= base_url('Images/default_guy.png');?>" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						
					</div>
					<div class="profile-usertitle-job">
            <?= $res->desg;?>
					</div>
				</div>
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Followed By <?= $follow_num;?> people</button>
				</div>
				<div class="profile-usermenu">
					<ul class="nav">
						<li >
							<?= anchor('prof_profile','&nbsp;Overview',['class'=>'glyphicon glyphicon-home']);?>
						</li>
						<li>
							<?= anchor('prof_profile/not_stud','&nbsp;Notify_Students',['class'=>'glyphicon glyphicon-user']);?>
						</li>
						<li>
							<?= anchor('prof_profile/upl_stud','&nbsp;Upload_for_Students',['class'=>'glyphicon glyphicon-ok']);?>
						</li>
						<li class="active">
							<?= anchor('prof_profile/msg_hist','&nbsp;Message_History',['class'=>'glyphicon glyphicon-flag']);?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content" style="height:1000px;">
             <h3><b><i>Your message History is shown below.</i></b></h3>
             <hr>

             <?php foreach($chat_person as $chat):?>
                 <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="<?= base_url('Images/default_guy.png');?>" alt="profile" style="height:100px;">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews"><?= $chat->send_to_name;?> </h4>
                              <a class="btn btn-info btn-circle text-uppercase" href='<?= base_url("index.php/prof_profile/chat/{$chat->send_to_id}");?>' id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                         <a class="btn btn-warning btn-circle text-uppercase" href='<?= base_url("index.php/prof_profile/prev_msg/{$chat->send_to_id}");?>'><span class="glyphicon glyphicon-comment">&nbsp</span>Show Messages</a>
                          </div>              
                        </div>
                      </li>          
                    </ul>  
                  <?php endforeach;?>

<div class="page">
  <?= $this->pagination->create_links();?>
  </div>

            </div>
             
		</div>
  <br>
<br>
<div class="chat_box">
  <div class="chat_head"> Chat Box</div>
  <div class="chat_body" id="online"> 
  
  </div>
  </div>
	</body>
  <script>
$(document).ready(function(){
  $('.chat_head').click(function(){
    $('.chat_body').slideToggle('slow');
  });
  $.get("<?= base_url('index.php/prof_profile/online');?>",function(data,status){
      $("#online").html(data);
    });
   $.ajaxSetup({cache:false});
     setInterval(function() {
      $('#online').load("<?= base_url('index.php/prof_profile/online');?>");
       },2000);  
});
  </script>
</html>
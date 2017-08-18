<?php include_once('stud_header.php');?>
<!DOCTYPE html>
<html>
<body>
  <?php if($error=$this->session->flashdata('login_failed')): ?>
<div class="container-fluid" style="height:30px;background-color:red;color:white;text-align:center;font-size:20px;margin-top:-20px">
<?= $error;?>
</div>
<?php endif;?>
<?php if($feedback=$this->session->flashdata('feedback')): ?>
  <?php if($feedback_class=$this->session->flashdata('feedback_class')): ?>
<div class="<?= $feedback_class ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center><strong><?= $feedback;?></strong></center>
</div>
<?php endif; ?>
<?php endif; ?>


<div id="band" class="container text-center">
  <div class="panel-group">
  <div class="panel panel-success">
      <div class="panel-heading"><h4><strong>Let's know about INTE-RACT</strong></h4>
 		<em>Student Professor Inreraction System</em></div>
      <div class="panel-body"><p>Teacher Student Interaction System can be used by education institutes to interact with students easily. The  Teacher-Student interaction system allows the professor of any organization to upload notes for a student. It will also facilitate keeping all the records of a professor, such as notes and any notification.</p></div>
    </div>
</div>
  <hr>
</div>

<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Inte-Ract Features</h3>
    <p class="text-center">These are the special features that only Inte-Ract has.<br> Remember to send a Hi !</p>
    <ul class="list-group">
      <li class="list-group-item">Professor Personal Chat <span class="label label-danger"></span></li>
      <li class="list-group-item">Follow Unfollow System <span class="label label-info">Unique ! </span></li> 
      <li class="list-group-item">Download and Upload System <span class="label label-info">Unique ! </span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?= base_url('Images/chatting.jpg');?>" width="400" height="300">
          <p><strong>Pesonal Chatting System</strong></p>
          <p>Professor to Professor Chatting</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal1" style="width: 100px;">Info</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
           <img src="<?= base_url('Images/follow-me.jpg');?>" width="400" height="300px" style="height: 350px;">
          <p><strong>Follow Unfollow System</strong></p>
          <p>Student Notification By following a Professor</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal2" style="width: 100px;">Info</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?= base_url('Images/upldown.png');?>" width="400" height="300" style="height: 350px">
          <p><strong>Upload and Download System</strong></p>
          <p>Student can download files Uploaded by the Professor</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal3" style="width: 100px;">Info</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Detailed Information</h4>
        </div>
        <div class="modal-body">
        	<h4>Personal chatting system is designed 
        		for the Professors.Online section shows
        		the online professors.Click on that and 
        		Professor can chat with another Professor.</strong></h4>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>

 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Detailed Information</h4>
        </div>
        <div class="modal-body">
        	<h4><strong>Follow system is designed for the students.
        				Students can follow any Professor.If a Professor
        				brodcast any notice,then it will be showed to the
        				students which are currently following the
        				Professor.</strong></h4>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
  
   <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Detailed Information</h4>
        </div>
        <div class="modal-body">
        	<h4><strong>Upload and download System are specially
        				designed for helping the Students.Professors can
        				upload any documents and student can download that
        				perticular documents.</strong></h4>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
    	<div class="container-fluid" style="height: 200px;width: 400px;background-color: #ffffff; margin-top:10px; border-radius: 5%">
      <p style="margin-top: 10px">Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Dr.B.C.Roy Engineering College, Durgapur</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 9999999999</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: interact@gmail.com</p></div>
    </div>
    <form method="post">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="send">Send</button>
        </div>
      </div>
    </div>
    </form>
     <?php
     if(isset($_POST['send']))
     {
	    $name=$_POST['name'];
	    $email=$_POST['email'];
	    $cmnt=$_POST['comments'];
	    $link=mysqli_connect("localhost","root","","professor_db");
	    $qry="insert into about(name,email,cmnts) values('$name','$email','$cmnt')";
	    mysqli_query($link,$qry);
	 }
       ?>
  </div>
  <br>
  <h3 class="text-center">About Us</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Sumanta</a></li>
    <li><a data-toggle="tab" href="#menu1">Sulagna</a></li>
    <li><a data-toggle="tab" href="#menu2">Subhadip</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>The Designer & Developer</h2>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>The Designer & Developer</h2>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>The Designer & Developer</h2>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Inte-Ract</p> 
</footer>
</body>
</html>
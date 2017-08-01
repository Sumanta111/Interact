<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
    <?= link_tag('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>
    <?= link_tag('assets/landing-page.css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	</head>
    <style>
    .intro-header{
    background: url("<?= base_url('Images/intro-bg.jpg');?>");
    background-size: cover;
    }
    </style>
	<body>
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= anchor('choice','Inte-Ract',['class'=>'navbar-brand topnav']); ?>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= anchor('choice/about_us',"About Us"); ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Inte-Ract</h1>
                        <h3>Welcome to Inte-Ract</h3>
                        <h3>Student Professor interaction system</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <?= anchor('prof_auth',"I'm a Professor",['class'=>'btn btn-default btn-lg']);?>
                            </li>         
                            <li>
                                <?= anchor('stud_auth',"I'm a Student",['class'=>'btn btn-default btn-lg']);?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</body>
</html>
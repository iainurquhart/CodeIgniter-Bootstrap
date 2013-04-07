<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$this->title?></title>
        <meta name="description" content="<?=$this->meta_description?>">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?=base_url();?>static/css/bootstrap.min.css">
        
        <!-- <link rel="stylesheet" href="<?=base_url()?>static/css/bootstrap-responsive.min.css"> -->

        <?php foreach($this->styles as $stylesheet):?>
    		<link rel="stylesheet" href="<?=base_url();?>static/css/<?=$stylesheet?>.css">
		<?php endforeach ?>

        <link rel="stylesheet" href="<?=base_url()?>static/css/main.css">
        <script src="<?=base_url()?>static/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    </head>
    <body class="<?=$this->body_class?>">

 <div class="wrapper">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <?php if($this->show_toolbar): ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?=base_url();?>">CodeIgnited Bootstrap</a>
                    <div class="nav-collapse collapse">

						<ul class="nav pull-right">
						<?php if($this->is_admin): ?>
						<li class="dropdown<?php if($this->active_top_nav == 'users'):?> active<?php endif ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Users &amp; Groups <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><?=anchor('auth', '<i class="icon-cog"></i> Manage Users')?></li>
								<li class="divider"></li>
								<li><?=anchor('auth/create_user', '<i class="icon-user"></i> New User')?></li>
								<li><?=anchor('auth/create_group', '<i class="icon-folder-open"></i> New Group')?></li>
								 
							</ul>
						</li>
						<?php endif ?>
						<?php if($this->logged_in):?>
                           		<li><?=anchor('auth/logout', '<i class="icon-off"></i> Logout')?></li>
                        	<?php else: ?>
                        		<li<?php if($this->active_top_nav == 'login'):?> class="active"<?php endif ?>><?=anchor('auth/login', 'Login')?></li>
                    		<?php endif ?>
						</ul>
                        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
    	<?php endif //show toolbar ?>

        <div class="container content-wrapper">
        	<?php echo $content; ?>
        </div> <!-- /container -->
</div><!-- /wrapper -->
        <?php if($this->show_footer): ?>
		<footer class="footer">
			 <div class="container">
			 	<div class="row">
					<div class="span12">
						<p>&copy; Company 2012</p>
					</div>
				</div>
			</div>
		</footer>
		<?php endif ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?=base_url()?>static/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?=base_url()?>static/js/vendor/bootstrap/bootstrap.min.js"></script>

        <?php foreach($this->scripts as $script):?>
    		<script src="<?php echo base_url(); ?><?=base_url()?>static/js/<?=$script?>.js"></script>
		<?php endforeach ?>

        <script src="<?=base_url()?>static/js/main.js"></script>

    </body>
</html>

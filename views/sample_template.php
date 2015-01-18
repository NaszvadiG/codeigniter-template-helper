<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php
		if (isset($titulo)) {
			echo $titulo . ' | ';
		} echo $titulo_padrao;
			?></title>
		<link rel="stylesheet" href="<?php echo base_url('resources/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/style.css'); ?>">
		<?php
            if (isset($_css_add_)) {
                echo $_css_add_;
            }
        ?>
	</head>
	<body>
	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php echo base_url()?>">Sample</a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="#">Minha Conta</a></li>
	          </ul>
	          <form class="navbar-form navbar-right">
	            <input type="text" class="form-control" placeholder="Pesquisar...">
	          </form>
	        </div>
	      </div>
	    </div>
		<div class="container-fluid">
			<div class="row">
				 <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<?php
			if (isset($_page_content_)) {
				echo $_page_content_;
			}
			?>
			</div>
			</div>
		</div>

		<script src="<?php echo base_url('resources/jquery-2.1.3.min.js'); ?>"></script>
		<script src="<?php echo base_url('resources/bootstrap/js/bootstrap.min.js'); ?>"></script>
			<?php
			if (isset($_js_add_)) {
				echo $_js_add_;
			}
			?>
	</body>
</html>
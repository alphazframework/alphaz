<!doctype html>
<html lang="<?= lang(); ?>">
	<head>
		  <meta charset="utf-8">
 		  <meta name="viewport" content="width=device-width, initial-scale=1">
 		  <link rel="shortcut icon" type="image/png" href="<?= site_base_url(); ?>/image/logo.png"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   		 <link rel="stylesheet" type="text/css" href="<?= site_base_url(); ?>/css/style.css">
		<title><?= printl('title:home'); ?></title>
	</head>

<body>
	<div class='container-fluid'>
	<div class="row">
			<div class="col-6">	
			<img src="<?= site_base_url(); ?>image/zest.png" class="" id='logo'>	
			</div>	
			<div class="col-6">
			<div id='margin'></div>
			<h1 class='text-center'><?= printl('framework:home'); ?></h1>
		    <p class='text-center'><?= printl('app:home'); ?></p>		
			</div>							
		</div>
</div>
</body>	
</html>



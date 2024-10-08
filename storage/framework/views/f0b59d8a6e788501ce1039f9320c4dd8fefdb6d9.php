<?php
	$themeClass = '';
	if (!empty($_COOKIE['theme'])) {
		if ($_COOKIE['theme'] == 'dark') {
			$themeClass = 'dark-theme';
		} else if ($_COOKIE['theme'] == 'light') {
			$themeClass = 'light-theme';
		}  
	} elseif (empty($_COOKIE['theme'])) {
		$themeClass = config('settings.default_theme');
		setcookie('theme', $themeClass);
	} 
?>
<!DOCTYPE html>
<html lang="<?php echo e(LaravelLocalization::getCurrentLocale()); ?>"
dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>">
	<head>
		<!-- Meta data -->
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
		
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Title -->
        <title><?php echo e(config('app.name')); ?></title>

		<!-- Style css -->
		<link href="<?php echo e(URL::asset('plugins/tippy/scale-extreme.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(URL::asset('plugins/tippy/material.css')); ?>" rel="stylesheet" />

		<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</head>

	<body class="app sidebar-mini white-background <?php echo $themeClass; ?>">

		<div id="loader-line" class="hidden"></div>

		<!-- Page -->
		<div class="page">
			<div class="page-main">
				
				<!-- App-Content -->			
				<div class="main-content">
					<div class="side-app">

						<?php echo $__env->yieldContent('content'); ?>

					</div>                   
				</div>
		
		</div><!-- End Page -->

		<?php echo $__env->make('layouts.footer-frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
	</body>
</html>


<?php /**PATH G:\vijay\project\xampp\htdocs\chatboat_menia\resources\views/layouts/auth.blade.php ENDPATH**/ ?>
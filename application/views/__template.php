<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<base href="<?php echo base_url(); ?>"></base>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title ?></title>
<?php view('__foundation.html', '__utilities.html') ?>
<link rel="stylesheet" type="text/css" href="assets/css/form-validate.css" />
<link rel="stylesheet" type="text/css" href="assets/css/foundation-icons/foundation-icons.css" />
<link rel="stylesheet" type="text/css" href="assets/css/app.css" />
<?php echo $css ?>
<script src="assets/js/modernizr.js"></script>
<?php echo $pre_js ?>
</head>
<body>
<?php echo $view ?>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/foundation.min.js"></script>
<script type="text/javascript" src="assets/js/holder.js"></script>
<script type="text/javascript" src="assets/js/masonry.js"></script>
<script type="text/javascript" src="assets/js/form-validate.js"></script>
<script type="text/javascript" src="assets/js/facebook.js"></script>
<script src="http://localhost:8080/reloader.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<?php echo $post_js ?>
<script type="text/javascript">
	if(typeof(reloader) != 'undefined'){reloader.set({'application': 'theseus.eduarch'});}
	$(document).foundation();
</script>
</body>
</html>
<?php include_once 'dom.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>QUnit Tests</title>
  	<link rel="stylesheet" href="http://code.jquery.com/qunit/qunit-1.10.0.css" />
</head>
<body>
  	<div id="qunit"></div>
	<?php echo get_menu_with_id('tests'); ?>
	<script type="text/javascript" src="http://code.jquery.com/qunit/qunit-1.10.0.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/tests.js"></script>
</body>
</html>
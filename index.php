<?php include_once 'dom.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<title>Superfish Reloaded</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js" language="javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js" language="javascript"></script>
		<link type="text/css" rel="Stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/cupertino/jquery-ui.css" />
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($){
			$("#close").add('#initialize').add('#destroy').add('#rerun').button();
			function init_all () {
				$('#default').superfish();
				$('#menu1').superfish({
					delay		: 	5000,
					speedIn		: 	300,
					speedOut	: 	100,
					animIn: {marginTop: '10px','opacity':'show','height':'show'},
					animOut: {marginTop: '-10px', 'opacity':'hide','height':'hide'}
				});
				$('#vertical').superfish();
			}
			$("#initialize").click(function  () {
				init_all();
				return false;
			});
			$("#close").click(function  () {
				$("ul.sf-menu").superfish('close');
				return false;
			});
			$("#destroy").click(function  () {
				$("ul.sf-menu").superfish('destroy');
				return false;
			});
			$("#rerun").click(function  () {
				$("#tests").attr('src', 'tests.php');
				return false;
			})
			//init_all();
		});
		</script>
	</head>
	<body>
	<h1>Superfish Reloaded!</h1>
	<div id="qunit"></div>
		<h2>Default Usage</h2>
		<?php get_menu_with_id('default');?>
		<h2>Fancy CSS</h2>
		<?php get_menu_with_id('menu1');?>
		<h2>Vertical</h2>
		<?php get_menu_with_id('vertical');?>
		<h2>Methods</h2>
		<ul>
			<li>Init (default)
				<code>
					$("ul").superfish()
				</code>
				<a href="#" id="initialize">Initialize All</a>
			</li>
			<li>Close (closes all open menus)
				<code>
					$("#menu1").superfish('close');
				</code>
				<a href="#" id="close">Close All</a>
			</li>
			<li>Destroy (removes all data and added DOM elements)
				<code>
					$("ul.sf-menu").superfish('destroy');
				</code>
				<a href="#" id="destroy">Destroy All</a>
			</li>
		</ul>
		<a href="#" id="rerun">Re-Run Tests</a>
		<iframe id="tests" src="tests.php" width="100%" height="400px" frameborder="0"/>
	</body>
</html>
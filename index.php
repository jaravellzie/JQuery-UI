<!doctype html>
<html>
<head>
	<title>JQuery Ui</title>
	<link rel="stylesheet" href="JQueryUI1.11.4/jquery-ui.min.css">
	<script type="text/javascript" src="JQueryUI1.11.4/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="JQueryUI1.11.4/jquery-ui.min.js"></script>
	
	<script>
		$(document).tooltip();
		$(function(){
			$("#menu").menu();
			$("#accordion").accordion();
			$("#tabs").tabs();
		});


	</script>
	<style>
		.ui-menu{
			width:200px;
		}
		#accordion{
			width:50%;
			padding:50px;
		}
		#tabs{
			width:50%;
		}
	</style>
</head>
<body>

<ul id="menu">
	<li>Aklan</li>
	<li>Antique</li>
	<li>Aklan</li>
	<li>Batangas
		<ul>
			<li>Lipa</li>
			<li>Sto.Tomas</li>
			<li>San Juan</li>
		</ul>
	</li>

	<li>Laguna</li>
	<li>Marikina
		<ul>
			<li>Parang
				<ul>
					<li>Dona Aurora</li>
					<li>Paraiso</li>
				</ul>
			</li>

			<li>Marikina Heights
				<ul>
					<li>Dona Aurora</li>
					<li>Paraiso</li>
				</ul>
			</li>
		</ul>
	</li>	

	<li>Quezon City</li>
	<li>Manila</li>

</ul>



<div id="accordion">
	<h2>Paragraph 1</h2>
	<div>
			<p>
				Ipso Facto,Ipso Facto,Ipso Facto,Ipso Facto!
			</p>
	</div>

	<h2>Paragraph 2</h2>
	<div>
			<p>
				Ipso Facto,Ipso Facto,Ipso Facto,Ipso Facto!
			</p>
	</div>
</div>


<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Tab 1</a></li>
		<li><a href="#tabs-2">Tab 2</a></li>
		<li><a href="#tabs-3">Tab 3</a></li>
	</ul>

	<div id="tabs-1">
		<p>Ipso Facto!</p>
	</div>
	<div id="tabs-2">
		<p>Ipso Facto!</p>
	</div>
	<div id="tabs-3">
		<p>Ipso Facto!</p>
	</div>
</div>

<a href="#" title="Hello! Aaron!">
	<p>Hello! World!
	<p>Hello! World! Hooray!!!</p>
	<p>Hello! Welcome to the Black Parade!</p>

	<label>Hello! Jamarah!<input type="text"/></label>
</a></p>

</body>
</html>
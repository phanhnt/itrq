<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> @yield('title') </title>
	<style type="text/css">
	
	#header{
		background-color: #921717;
		background-size: 200px;
		width: 500px;
		height: 400px;		
	}
	#container{
		background-color: #0E0303;
		color: #9FAB1B;
		background-size: 200px;
		width: 500px;
		height: 400px;	
	}
	body{
		text-align: center;
		margin: 5%;
		vertical-align: 5px;
	}

	</style>
</head>
<body>
	
	<!--  -->
	<div id="header">@yield('header')</div> 
	<div id ="container"> Tôi là Phương Anh</div>
	
</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>Navigation</title>
		<style type="text/css">
			ul{
				list-style-type: none;
				margin:0px;
				padding: 0px;	
				position: sticky;				/* this property fix navigation bar on scrolling*/
				top: 0;							/* Important tag with above tag*/
				overflow: hidden;
				background-color: skyblue;
			}
			li a{
				display: block;
				float: left;
				margin:0px;
				text-decoration: none;
				padding: 20px;
			}
			a:hover
			{
				background-color: #aaa;
			}
			
		</style>
	</head>
	<body style="margin:0px;">
		
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Service</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Login</a></li>
		</ul>

	</body>
</html>

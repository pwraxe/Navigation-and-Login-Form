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
				background-color: #444444;
				width: 20%;
				
				text-align: center;
			}
			li a{
				display: block;
				color: #fff;
				margin:0px;
				border: 1px solid white;
				text-decoration: none;
				padding: 20px;
				font-size:1.5vw;
			}
			a:hover
			{
				background-color: #aaa;
			}
		/*----------------------------------------------*/	

			header{
				text-align: center;
				background-color: #888;
				height: auto;
				overflow: hidden;
			}
			img{
				width:16%; 
				
				height:auto;
				
			}
			
		</style>
	</head>
	<body style="margin:0px;">
		<header>
			<img src="logo1.png" >
		</header>
		<ul>
			<li><a href="#1">Home</a></li>
			<li><a href="#2">Gallery</a></li>
			<li><a href="#3">Products</a></li>
			<li><a href="#4">Service</a></li>
			<li><a href="#5">About</a></li>
			<li><a href="#6">Contact</a></li>
			<li><a href="#7">Login</a></li>
		</ul>

	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title>Testing Pushstate</title>
		<style type="text/css">
		<!--
			body{
				margin: 0;
				font: 14px normal arial, verdana;
			}
			a{
				outline: 0;
				text-decoration: none;
				color: #1361aa;
			}
			a:hover{ color: blue; }
			a:active{ color: #ff0000; }

			.clearfix{ clear: both; margin: 0; padding: 0; }
			.btn{
				display: inline-block;
				padding: 5px 12px 5px 10px;
				border: 1px solid #ddd;
				color: #333;
				font-size: 13px;
				cursor: pointer;
			}
			.btn:hover{ color: #000; }
			.btn:active{ color: #1361aa; }

			.container{
				width: 60%;
				margin: 20px auto;
			}
			.container > table{ width: 100%; }
			.container > table td{ border: 1px solid #c2c1c1; }
			.container .sidebar, .container .content{ vertical-align: top; }
			.container .sidebar{ width: 30%; }
			.container .sidebar ul{
				margin: 10px 20px 50px; padding: 0;
				list-style: none;
			}
			.container .sidebar ul a{
				display: block;
				padding: 8px 10px 6px;
				border-bottom: 1px solid #ddd;
			}
			.container .content{ padding: 15px 20px 20px 20px;  }
			.container .content span.info{
				color: blue;
				display: block;
				border: 1px solid blue;
				padding: 5px 8px;
				margin: 5px 0;
			}
			.container .content h4.caption{
				border-bottom: 1px solid #ddd;
				padding: 0 0 7px 0;
				font-size: 15px;
			}
			.container .content .btn-add{ margin-bottom: 10px; }
			.container .content .data-list{
				color: #333;
				width: 100%;
				font-size: 13px;
				border-collapse: collapse;
			}
			.container .content .data-list th, .container .content .data-list td{ padding: 4px; }
			.container .content .data-list td:last-child{ text-align: center; }
			.container .content form td{ border: 0; padding: 4px; }
			.container .content form .field{ width: 100px; }
			.container .content form .colon{ width: 20px; text-align: center; }
			.container .content form input[type="text"]{
				font: normal 13px arial, verdana;
				color: #333;
				border: 1px solid #c2c1c1;
				padding: 6px 10px;
				min-width: 220px;
			}

		-->
		</style>
		<script type="text/javascript" src="jquery-1.10.min.js"></script>
		<script type="text/javascript" src="config.js"></script>
		<script type="text/javascript" src="routes.js"></script>
		<script type="text/javascript" src="app.js"></script>
	</head>
	<body data-pjax-container="#frame">
		<div class="container">
			<table>
				<tr>
					<td class="sidebar">
						<ul>
							<li><a href="#/home">Home</a></li>
							<li><a href="#/about">About</a></li>
							<li><a href="#/contact">Contact</a></li>
							<li><a href="#/sitemap">Sitemap</a></li>
						</ul>
					</td>
					<td class="content">
						<div id="frame"></div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
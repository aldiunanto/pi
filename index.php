<!DOCTYPE html>
<html>
	<head>
		<title>Testing Pushstate</title>
		<link rel="stylesheet" href="public/css/style.css" />
		<script type="text/javascript" src="public/js/vendor/jquery-1.10.min.js"></script>
		<script type="text/javascript" src="public/js/config.js"></script>
		<script type="text/javascript" src="public/js/routes.js"></script>
		<script type="text/javascript" src="public/js/app.js"></script>
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
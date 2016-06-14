<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pushstate</title>
	<script type="text/javascript" src="jquery-1.10.min.js"></script>
	<script>
		$(function(){
			$('a').on('click', function(e){
				e.preventDefault();
				history.pushState({}, 'newtitle', $(this).attr('href'));
			});
		});
	</script>
</head>
<body>
	<a href="newurl.html">Test PushState</a>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=cp1251" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>������� TEAM</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<?if (file_exists('css/'.$content_view.'.css')){?>
		<link rel="stylesheet" type="text/css" href=<?echo '/css/'.$content_view.'.css';?> /><?}?>
		<script type="text/javascript" src="/js/script.js"></script>
		<script type="text/javascript" src="/js/jquery-1.6.2.js"></script>
		<?if (file_exists('js/'.$content_view.'.js')){?>
		<script type="text/javascript" src="<?echo '/js/'.$content_view.'.js';?>"></script><?}?>
	</head>
	<body>
	<nav id='nav'>
		<ul>
			<li><a href='#'>������������� ������������</a></li>
			<li><a id='ss' href='#'>������������ ������������</a></li>
			<li><a href='#'>���������� ���������</a></li>
			<li><a href='#'>���������-�������</a></li>
		</ul>
	</nav>
	<?include "app/views/".$content_view.".php";?>
	</body>
</html>
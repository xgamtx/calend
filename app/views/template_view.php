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
		<script> 
		$(document).ready(function(){
				var page_h = $(window).height()-$("nav").height();
				$("#day_event").height(page_h);
				$("#gibk").height(page_h/2);
			function window_resize(){
				var page_h = $(window).height()-$("nav").height();
				$("#day_event").height(page_h);
			};
<?/*		  $(document).scroll(function(){
		  	if ($(document).scrollTop()>$('nav').children('ul').outerHeight(true))
			  	$('nav').children('ul').css('top',$(document).scrollTop()+'px');
			else
				$('nav').children('ul').css('top','0');
		  });*/?>
		});
		</script> 
	</head>
	<body>
	<nav>
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
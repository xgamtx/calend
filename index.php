<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("div#a").mouseenter(function(){
  	$(this).children('div').stop();
    $(this).children('div').animate({
      width:'100%'
    });
  });
  $("div#a").mouseleave(function(){
  	$(this).children('div').stop();
    $(this).children('div').animate({
      width:'0px'
    });
  });
});
</script> 
</head>
 
<body>
<button>Start Animation</button>
<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>
<div id='a' style='border:1px solid #000;width:512px;position:relative'><div style='opacity:0.9;position:absolute;height:320px;width:0;background:#fff'></div>
<img src='ss.png'>
</div>
<div id='a' style='border:1px solid #000;width:512px;position:relative'><div style='opacity:0.9;position:absolute;height:320px;width:0;background:#fff'></div>
<img src='ss.png'>
</div>
</body>
</html>

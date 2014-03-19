$(document).ready(function(){
	var page_h = $(window).height()-$("#nav").height();
	$("#day_event").height(page_h);
	$("#gibk").height(page_h/2);
	
	$('#rigid_events div.rigid_event').click(function(){
		var val=$("#edit_rigid").children('[name="name"]').val();
		$('#edit_rigid').remove();
		if (val!=$(this).children('[name="name"]').val())
		{
			var innerTextValue='<input type="text" name="name" value="'+$(this).children('[name="name"]').val()+'">';
			innerTextValue+='<input type="color" name="color" value="#'+$(this).children('[name="color"]').val()+'"><br>';
			innerTextValue+='Старт <input type="text" name="h_st" size="2" value="'+$(this).children('[name="h_st"]').val()+'">:<input type="text" size="2" name="m_st" value="'+$(this).children('[name="m_st"]').val()+'"><br>';
			innerTextValue+='Конец <input type="text" name="h_end" size="2" value="'+$(this).children('[name="h_end"]').val()+'">:<input type="text" name="m_end" size="2" value="'+$(this).children('[name="m_end"]').val()+'">';
	//		alert($(this).children('[name="color"]').val())
			var block=$("<div id='edit_rigid'></div>").html(innerTextValue);
			var posY=($(this).css('top').replace('px','')*1+$(this).outerHeight()/2);
			$(block).css('top',posY+'px');
			$("#day_event").append(block);
		}
	});
});
$( window ).resize(function() {
	var page_h = $(window).height()-$("#nav").height();
	$("#day_event").height(page_h);
	$("#gibk").height(page_h/2);
}); 
<?/*for ($i=0;$i<count($data);$i++){?>
	<p><?echo $data[$i]->name.'-'.$data[$i]->end;?></p>
<?}*/?>
<div id='day_event'>
	<div id='setka'>
		<?for ($i=0;$i<24;$i++){?>
			<div><span><?if ($i) echo $i;?></span></div>
		<?}?>
	</div>
</div>
<div id='gibk'>
<?for ($i=0;$i<count($data);$i++){?>
	<div><label><input type='checkbox'><?echo $data[$i]->name.'-'.$data[$i]->end;?></label></div>
<?}?>
</div>
<div id='cal'>
	<div id='date'>
		<?echo date('j');?>
	</div>
	<table>
		<tr>
			<?
			$date_n=date('N',mktime(0,0,0,date('n'),1,date('Y')))-1;
			for ($i=0;$i<$date_n;$i++){?>
				<td></td>
			<?}
			for ($i=1;$i<=date('t');$i++){?>	
				<td><a href='#'><?echo $i;?></a></td>
			<?	if (($i+$date_n)%7==0)
					echo "</tr><tr>";
			}?>
			<tr>
	</table>
</div>
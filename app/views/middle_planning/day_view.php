<div id='day_event'>
	<div id='setka'>
		<?for ($i=0;$i<24;$i++){?>
			<div><span><?if ($i) echo $i;?></span></div>
		<?}?>
		<div id='gluh'></div>
	</div>
	<div id='rigid_events'>
		<?for ($i=0;$i<count($data->rigid_events);$i++){
			$top=$data->rigid_events[$i]->h_start*60+$data->rigid_events[$i]->m_start;
			$height=$data->rigid_events[$i]->h_end*60+$data->rigid_events[$i]->m_end-$top-12;
			if ($height<12)
			{
				$height=$height+10;
				$pad_top=1;
			}
			else
				$pad_top=0;?>
			<div class='rigid_event' style='top:<?echo $top;?>px;height:<?echo $height;?>px;<?
			if ($pad_top)
				echo "padding:0 10px;";?>background:#<?echo $data->rigid_events[$i]->colour;?>'><?echo $data->rigid_events[$i]->name;?>
				<input type='hidden' name='color' value='<?echo $data->rigid_events[$i]->colour;?>'>
				<input type='hidden' name='name' value='<?echo $data->rigid_events[$i]->name;?>'>
				<input type='hidden' name='h_st' value='<?echo $data->rigid_events[$i]->h_start;?>'>
				<input type='hidden' name='m_st' value='<?echo $data->rigid_events[$i]->m_start;?>'>
				<input type='hidden' name='h_end' value='<?echo $data->rigid_events[$i]->h_end;?>'>
				<input type='hidden' name='m_end' value='<?echo $data->rigid_events[$i]->m_end;?>'>
				<input type='hidden' name='color' value='<?echo $data->rigid_events[$i]->colour;?>'>
			</div>
		<?}?>
	</div>
</div>
<div id='gibk'>
<?for ($i=0;$i<count($data->rigid_events);$i++){?>
	<div><label><input type='checkbox'><?echo $data->rigid_events[$i]->name.'-'.$data->rigid_events[$i]->h_end;?></label></div>
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
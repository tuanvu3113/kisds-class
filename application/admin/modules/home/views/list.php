
<?php 	$i = $start;
foreach ($datas as $item) {
	$id = $item->id;
	?>
	<tr class="content edit" id="<?=$item->id;?>" department ="<?=$item->department;?>" grouptype = "<?=$item->grouptype;?>" >
		<td style="text-align: center;">
			<input id="<?=$item->id;?>" class="check noClick" type="checkbox" value="<?=$id; ?>" name="keys[]">
		</td>
		<td style="text-align: center;"><?=$i;?></td>
		<td class="groupname"><?=$item->groupname?></td>

			<td class="center permission" id="<?=$id;?>">
			<a href="#">
				<i class="fa fa-gears"></i>
				<span class="text-muted"></span>
			</a>
		</td>
		<td></td>
	</tr>

<?php $i++;}?>

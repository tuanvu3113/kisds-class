<?php
$i= $start;
foreach ($datas as $item) {
?>

	<tr class="content edit" groupid = <?=$item->groupid;?> avatar = "<?=$item->image;?>" id="<?=$item->id; ?>" >
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id; ?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="username"><?=$item->username;?></td>
		<td class="fullname"><?=$item->fullname;?></td>
		<td class="groupid"  ><?=$item->groupname;?></td>
		<td class="mobile"><?=$item->mobile;?></td>
		<td class="email"><?=$item->email;?></td>
		<td></td>
	</tr>
<?php
$i++;
}
?>
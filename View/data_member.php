<?php

if (isset($_GET['delete'])) {
	$member->softDeleteMember($_GET['delete']);
}

?>

<div class="group">
	<i class="fa fa-th-list fa-lg left"></i>
	<span class="right">DATA PESERTA</span>
</div>
<?php if (isset($_GET['delete'])) : ?>
		<p class="message"><?= $member->message ?></p>
	<?php endif; ?>
<table class="table-up">
	<tr>
		<th class="qty">NO</th>
		<th>NAMA</th>
		<th>GENDER</th>
		<th>PHOTO</th>
		<th>DATE EXPIRED</th>
		<th>OPTION</th>
	</tr>
<?php $no = 1 ?>
<?php foreach ($member->getAll() as $val) : ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $val['name'] ?></td>
		<td><?= $val['gender'] ?></td>
		<td><?= $val['photo'] ?></td>
		<td><?= $val['date_expired'] ?></td>
		<td class="col-3"><a href="index.php?page=edit&id=<?= $val['id'] ?>">
			<button class="width-47" type="button">
				<i class="fa fa-pencil fa-lg"></i>
			</button></a>
			<a href="index.php?page=data&delete=<?= $val['id'] ?>">
			<button class="width-47 error" type="button">
				<i class="fa fa-trash fa-lg"></i>
			</button></a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<h2><?php echo \Lang::get('oil.view.listing'); ?> <?php echo \Str::ucfirst($plural_name); ?></h2>
<br />
<?php echo "<?php if (\${$plural_name}): ?>"; ?>

<table class="table table-striped">
	<thead>
		<tr>
<?php foreach ($fields as $field): ?>
			<th><?php echo \Inflector::humanize($field['name']); ?></th>
<?php endforeach; ?>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php echo '<?php'; ?> foreach ($<?php echo $plural_name; ?> as $item): <?php echo '?>'; ?>
		<tr>

<?php foreach ($fields as $field): ?>
			<td><?php echo '<?php'; ?> echo $item<?php echo '->'.$field['name']; ?>; <?php echo '?>'; ?></td>
<?php endforeach; ?>
			<td>
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/view/'.$item->id, '<?php echo \Lang::get('oil.view.view'); ?>'); <?php echo '?>'; ?> |
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/edit/'.$item->id, '<?php echo \Lang::get('oil.view.edit'); ?>'); <?php echo '?>'; ?> |
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/delete/'.$item->id, '<?php echo \Lang::get('oil.view.delete'); ?>', array('onclick' => "return confirm('<?php echo \Lang::get('oil.view.are_you_sure'); ?>')")); <?php echo '?>'; ?>
			</td>
		</tr>
<?php echo '<?php endforeach; ?>'; ?>
	</tbody>
</table>

<?php echo '<?php else: ?>'; ?>

<p><?php echo \Lang::get('oil.view.no'); ?> <?php echo \Str::ucfirst($plural_name); ?>.</p>

<?php echo '<?php endif; ?>'; ?>
<p>
    <?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/create', '<?php echo \Lang::get('oil.view.add_new'); ?> <?php echo \Inflector::humanize($singular_name); ?>', array('class' => 'btn btn-success')); <?php echo '?>'; ?>
</p>

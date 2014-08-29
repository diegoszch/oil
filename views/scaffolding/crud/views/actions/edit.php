<h2><?php echo \Lang::get('oil.view.editing'); ?> <?php echo \Str::ucfirst($singular_name); ?></h2>
<br>

<?php echo '<?php'; ?> echo render('<?php echo $view_path; ?>/_form'); ?>
<p>
	<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/view/'.$<?php echo $singular_name; ?>->id, '<?php echo \Lang::get('oil.view.view'); ?>'); <?php echo '?>'; ?> |
	<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>', '<?php echo \Lang::get('oil.view.back'); ?>'); <?php echo '?>'; ?>
</p>

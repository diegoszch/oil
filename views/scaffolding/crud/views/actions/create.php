<h2><?php echo \Lang::get('oil.view.new'); ?> <?php echo \Str::ucfirst($singular_name); ?></h2>
<br>

<?php echo '<?php'; ?> echo render('<?php echo $view_path; ?>/_form'); ?>


<p><?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri ?>', '<?php echo \Lang::get('oil.view.back'); ?>'); <?php echo '?>'; ?></p>

<h2><?php \Lang::get('oil.view.viewing'); ?> <span class='muted'>#<?php echo '<?php'; ?> echo $<?php echo $singular_name; ?>->id; <?php echo '?>'; ?></span></h2>

<?php foreach ($fields as $field): ?>
    <p>
        <strong><?php echo \Inflector::humanize($field['name']); ?>:</strong>
        <?php echo '<?php'; ?> echo $<?php echo $singular_name . '->' . $field['name']; ?>; <?php echo '?>'; ?>
    </p>
<?php endforeach; ?>

<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri ?>/edit/'.$<?php echo $singular_name; ?>->id, '<?php echo \Lang::get('oil.view.edit');?>'); <?php echo '?>'; ?> |
<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri ?>', '<?php echo \Lang::get('oil.view.back');?>'); <?php echo '?>'; ?>

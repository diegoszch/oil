<h2><?php echo \Lang::get('oil.view.listing'); ?> <span class='muted'><?php echo \Str::ucfirst($plural_name); ?></span></h2>
<br>
<?php echo "<?php if (\${$plural_name}): ?>"; ?>

<table class="table table-striped">
    <thead>
        <tr>
            <?php foreach ($fields as $field): ?>
                <th><?php echo \Inflector::humanize($field['name']); ?></th>
            <?php endforeach; ?>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php echo '<?php'; ?> foreach ($<?php echo $plural_name; ?> as $item): <?php echo '?>'; ?>
        <tr>
            <?php foreach ($fields as $field): ?>
                <td><?php echo '<?php'; ?> echo $item<?php echo '->' . $field['name']; ?>; <?php echo '?>'; ?></td>
            <?php endforeach; ?>
            <td>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/view/'.$item->id, '<i class="icon-eye-open"></i> <?php echo \Lang::get("oil.view.view"); ?>', array('class' => 'btn btn-small')); <?php echo '?>'; ?>
                        <?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/edit/'.$item->id, '<i class="icon-wrench"></i> <?php echo \Lang::get("oil.view.edit"); ?>', array('class' => 'btn btn-small')); <?php echo '?>'; ?>
                        <?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/delete/'.$item->id, '<i class="icon-trash icon-white"></i> <?php echo \Lang::get("oil.view.delete"); ?>', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('<?php echo \Lang::get("oil.view.are_you_sure");?>')")); <?php echo '?>'; ?>
                    </div>
                </div>
            </td>
        </tr>
        <?php echo '<?php endforeach; ?>'; ?>
    </tbody>
</table>

<?php echo '<?php else: ?>'; ?>

<p><?php echo \Lang::get("oil.view.no"); ?> <?php echo \Str::ucfirst($plural_name); ?>.</p>

<?php echo '<?php endif; ?>'; ?>
<p>
    <?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/create', '<?php echo \Lang::get('oil.view.add_new');?> <?php echo \Inflector::humanize($singular_name); ?>', array('class' => 'btn btn-success')); <?php echo '?>'; ?>
</p>

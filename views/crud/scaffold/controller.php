<?php echo '<?php' ?>

class Controller_<?php echo $controller_class; ?> extends <?php echo \Cli::option('extends', 'Controller_Template') ?>

{

<?php foreach ($actions as $action): ?>
	public function action_<?php echo $action['name']; ?>(<?php echo $action['params']; ?>)
	{
<?php echo $action['code'].PHP_EOL; ?>
	}

<?php endforeach; ?>

}

		is_null($id) and Response::redirect('<?php echo $uri ?>');

		if ($<?php echo $singular_name; ?> = Model_<?php echo $model_name; ?>::find($id))
		{
			$<?php echo $singular_name; ?>->delete();

			Session::set_flash('success', '<?php echo \Lang::get('oil.controller.deleted'); ?> <?php echo $singular_name; ?> #'.$id);
		}

		else
		{
			Session::set_flash('error', '<?php echo \Lang::get('oil.controller.could_not_delete'); ?> <?php echo $singular_name; ?> #'.$id);
		}

		Response::redirect('<?php echo $uri; ?>');

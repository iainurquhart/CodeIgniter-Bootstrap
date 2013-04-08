<div class="row introduction-row">
	<div class="span12">
		<h1><?php echo lang('change_password_heading');?></h1>
		<?php if($message):?>
			<div class="alert fade-in alert-error alert-block">
				<?=$message?>
			</div>
		<?php endif ?>
	</div>
</div>

<div class="row add-whitespace">
	<div class="span12">
		<?php echo form_open("auth/change_password", array('class' => 'form-horizontal '));?>

		<div class="alert alert-info">
			<?=sprintf('<strong>Note:</strong> Passwords must be at least %s characters long', $min_password_length);?>
		</div>

			<div class="control-group">
				<label class="control-label" for="old_password"><?=lang('change_password_old_password_label')?></label>
				<div class="controls"><?php echo form_input($old_password);?></div>
			</div>

			<div class="control-group">
				<label class="control-label" for="new_password">New Password:</label>
				<div class="controls"><?php echo form_input($new_password);?></div>
			</div>

			<div class="control-group">
				<label class="control-label" for="new_password_confirm"><?=lang('change_password_new_password_confirm_label')?></label>
				<div class="controls"><?php echo form_input($new_password_confirm);?></div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><?=lang('change_password_submit_btn')?></button>
				</div>
			</div>

		<?php echo form_close();?>
	</div>
</div>
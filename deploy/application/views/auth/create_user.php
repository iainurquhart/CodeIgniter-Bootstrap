<div class="row introduction-row">
	<div class="span12">
		<h1><?php echo lang('create_user_heading');?></h1>
		<p class="lead"><?php echo lang('create_user_subheading');?></p>

		<?php if($message):?>
			<div class="alert fade-in alert-error alert-block">
				<?=$message?>
			</div>
		<?php endif ?>
	</div>
</div>

<div class="row add-whitespace">
	<div class="span12">
		<?php echo form_open("auth/create_user", array('class' => 'form-horizontal '));?>

			<div class="control-group">
				<label class="control-label" for="first_name"><?=lang('create_user_fname_label')?></label>
				<div class="controls"><?php echo form_input($first_name);?></div>
			</div>

			<div class="control-group">
				<label class="control-label" for="last_name"><?=lang('create_user_lname_label')?></label>
				<div class="controls"><?php echo form_input($last_name);?></div>
			</div>

			<div class="control-group">
				<label class="control-label" for="company"><?=lang('create_user_company_label')?></label>
				<div class="controls"><?php echo form_input($company);?></div>
			</div>

			<div class="control-group">
				<label class="control-label" for="email"><?=lang('create_user_email_label')?></label>
				<div class="controls"><?php echo form_input($email);?></div>
			</div>

			<div class="control-group">
				<label class="control-label" for="password"><?=lang('create_user_password_label')?></label>
				<div class="controls"><?php echo form_input($password);?></div>
			</div>

			<div class="control-group">
				<label class="control-label" for="password_confirm"><?=lang('create_user_password_confirm_label')?></label>
				<div class="controls"><?php echo form_input($password_confirm);?></div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><?=lang('create_user_submit_btn')?></button>
				</div>
			</div>

		<?php echo form_close();?>
	</div>
</div>
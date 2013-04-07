<div class="row introduction-row">
	<div class="span12">
		<h1><?php echo lang('edit_user_heading');?></h1>
		<p class="lead"><?php echo lang('edit_user_subheading');?></p>

		<?php if($message):?>
			<div class="alert fade-in alert-error alert-block">
				<?=$message?>
			</div>
		<?php endif ?>
	</div>
</div>

<div class="row add-whitespace">
	<div class="span12">
		<?php echo form_open(uri_string(), array('class' => 'form-horizontal '));?>

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
					<h4><?=lang('edit_user_groups_heading')?></h4>
					<?php foreach ($groups as $group):?>
						<label class="checkbox">
						<?php
							$gID = $group['id'];
							$checked = null;
							$item = null;
							foreach($currentGroups as $grp)
							{
								if ($gID == $grp->id) 
								{
									$checked = ' checked="checked"';
									break;
								}
							}
						?>
						<input type="checkbox" name="groups[]" value="<?=$group['id']?>"<?=$checked?>>
						<?php echo $group['name'];?>
						</label>
					<?php endforeach?>
					</div>
			</div>

     		<?php echo form_hidden('id', $user->id);?>
      		<?php echo form_hidden($csrf); ?>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><?=lang('edit_user_submit_btn')?></button>
				</div>
			</div>

		<?php echo form_close();?>
	</div>
</div>
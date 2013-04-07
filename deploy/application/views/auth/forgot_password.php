<?php echo form_open("auth/forgot_password", array('class' => 'form-signin form-password-reset'));?>
	<h2 class="form-signin-heading">Reset your password.</h2>
	<?php if($message):?>
		<div class="alert fade-in alert-error">
			<?=$message?>
		</div>
	<?php endif ?>

	<?=form_input($email)?>

	<p>
		<button class="btn btn-primary" type="submit">Submit</button>
		&nbsp; &nbsp; <?=anchor('auth/login', 'Cancel')?></a>
	</p>
<?php echo form_close();?>
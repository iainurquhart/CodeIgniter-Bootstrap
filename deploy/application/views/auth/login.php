<?php echo form_open("auth/login", array('class' => 'form-signin'));?>
	<h2 class="form-signin-heading">Sign in.</h2>
	<?php if($message):?>
		<div class="alert fade-in alert-error">
			<?=$message?>
		</div>
	<?php endif ?>

	<?=form_input($identity)?>
	<?=form_input($password)?>

	<p>
		<button class="btn btn-primary" type="submit">Sign in</button>
		&nbsp; &nbsp; <?=anchor('auth/forgot_password', 'Forgot Password')?></a>
	</p>
	<hr />
	<label class="checkbox">
		<?=form_checkbox('remember', '1', FALSE, 'id="remember"')?>
		Remember me 
	</label>
<?php echo form_close();?>
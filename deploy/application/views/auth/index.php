<div class="row introduction-row">
	<div class="span12">

		<h1><?php echo lang('index_heading');?></h1>

		<p class="lead">Manage Users &amp; Groups</p>

		<?php if($message):?>
			<div class="alert alert-success"><?php echo $message;?></div>
		<?php endif ?>

	</div>
</div>

<div class="row">
	<div class="span12">

			<table class="table table-striped list-members table-bordered table-hover">
				<tr>
					<th class="id-col compact-col">ID</th>
					<th class="firstnam-col"><?php echo lang('index_fname_th');?></th>
					<th class="lastname-col"><?php echo lang('index_lname_th');?></th>
					<th class="email-col"><?php echo lang('index_email_th');?></th>
					<th class="groups-col"><?php echo lang('index_groups_th');?></th>
					<th class="status-col compact-col"><?php echo lang('index_status_th');?></th>
					<th class="action-col compact-col"><?php echo lang('index_action_th');?></th>
				</tr>
				<?php foreach ($users as $user):?>
					<tr>
						<td class="id-col"><?php echo $user->id;?></td>
						<td class="firstnam-col"><?php echo $user->first_name;?></td>
						<td class="lastname-col"><?php echo $user->last_name;?></td>
						<td class="email-col"><?php echo mailto($user->email, $user->email);?></td>
						<td class="groups-col">
							<?php $i=1; foreach ($user->groups as $group):?>
								<?php 
								 	$sep = ($i++ != count($user->groups)) ? ',' : '';
									echo anchor("auth/edit_group/".$group->id, $group->name).$sep ;
								?>
			                <?php endforeach?>
						</td>
						<td class="status-col compact-col">

							<div class="btn-group">
							<a class="btn dropdown-toggle btn-<?php echo ($user->active) ? 'success' : 'danger'; ?>" data-toggle="dropdown" href="#">
							<?php echo ($user->active) ? 'Active' : 'Disabled'; ?>
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<?php if($user->active):?>
								<li>
									<?php echo anchor("auth/deactivate/".$user->id, 'Deactivate'); ?>
								</li>
								<?php else: ?>
								<li>
									<?php echo anchor("auth/activate/". $user->id, 'Activate'); ?>
							<?php endif ?>
							</ul>
							</div>
							
						</td>
						<td class="action-col compact-col"><?php echo anchor("auth/edit_user/".$user->id, '<i class="icon-pencil icon-white"></i> Edit', 'class="btn btn-primary"') ;?></td>
					</tr>
				<?php endforeach;?>
			</table>

			<div class="main-actions">
				 <?php echo anchor('auth/create_user', '<i class="icon-user icon-white"></i> New User', 'class="btn btn-primary"')?>
				 &nbsp; 
				 <?php echo anchor('auth/create_group', '<i class="icon-folder-open"></i> New Group', 'class="btn"')?>
			</div>
	</div>
</div>
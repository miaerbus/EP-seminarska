<?php echo $this->Html->script('sortable'); ?>
<?php echo $this->Html->css('sortable'); ?>
<?php echo $this->Html->css('users'); ?>
<h4>Clients</h4>
<?php echo $this->Html->link('new', array('controller' => 'users', 'action' => 'add_client')); ?>
<table class="sortable" id="users_table" cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>City</th>
		<th>Addres</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Actions</th>
	</tr>
	<?php foreach ($users as $kuser):  $user = $kuser['User']; ?>
	<tr>
		<td><?php echo $user['id']; ?></td>
		<td><?php echo $user['first_name']." ".$user['last_name']; ?></td>
		<td><?php echo $user['city']; ?></td>
		<td><?php echo $user['address']; ?></td>
		<td><?php echo $user['email']; ?></td>
		<td><?php echo $user['phone']; ?></td>
		<td>
		    <?php echo $this->Html->link("Edit", array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
		    <?php echo $this->Form->postLink("Delete", array('controller' => 'users', 'action' => 'delete', $user['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

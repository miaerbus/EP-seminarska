<div>
	<div>
		<?php echo $this->Html->link("Orders", array('controller' => 'items', 'action' => 'orders')); ?>
	</div>
	<div>
		<?php echo $this->Html->link("Clients", array('controller' => 'users', 'action' => 'clients_index')); ?>
	</div>
	<div>
		<?php echo $this->Html->link("Items", array('controller' => 'items', 'action' => 'index')); ?>
	</div>
</div>
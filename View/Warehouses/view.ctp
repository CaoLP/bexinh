<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Warehouse'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>'.__('Edit Warehouse'), array('action' => 'edit', $warehouse['Warehouse']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>'.__('Delete Warehouse'), array('action' => 'delete', $warehouse['Warehouse']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $warehouse['Warehouse']['id'])); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Warehouses'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Warehouse'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Store'); ?></th>
		<td>
			<?php echo $this->Html->link($warehouse['Store']['name'], array('controller' => 'stores', 'action' => 'view', $warehouse['Store']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Product'); ?></th>
		<td>
			<?php echo $this->Html->link($warehouse['Product']['name'], array('controller' => 'products', 'action' => 'view', $warehouse['Product']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Options'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['options']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Price'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Retail Price'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['retail_price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qty'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['qty']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Code'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Creator'); ?></th>
		<td>
			<?php echo $this->Html->link($warehouse['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $warehouse['TrackableCreator']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($warehouse['Warehouse']['updated']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Updater'); ?></th>
		<td>
			<?php echo $this->Html->link($warehouse['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $warehouse['TrackableUpdater']['id'])); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

    
</div>


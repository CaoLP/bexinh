<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Customer Promote'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>'.__('Edit Customer Promote'), array('action' => 'edit', $customerPromote['CustomerPromote']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>'.__('Delete Customer Promote'), array('action' => 'delete', $customerPromote['CustomerPromote']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customerPromote['CustomerPromote']['id'])); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Customer Promotes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Customer Promote'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Promotes'), array('controller' => 'promotes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Promote'), array('controller' => 'promotes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($customerPromote['CustomerPromote']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Customer'); ?></th>
		<td>
			<?php echo $this->Html->link($customerPromote['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $customerPromote['Customer']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Promote'); ?></th>
		<td>
			<?php echo $this->Html->link($customerPromote['Promote']['name'], array('controller' => 'promotes', 'action' => 'view', $customerPromote['Promote']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Promote Code'); ?></th>
		<td>
			<?php echo h($customerPromote['CustomerPromote']['promote_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Used'); ?></th>
		<td>
			<?php echo h($customerPromote['CustomerPromote']['used']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Store'); ?></th>
		<td>
			<?php echo $this->Html->link($customerPromote['Store']['name'], array('controller' => 'stores', 'action' => 'view', $customerPromote['Store']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($customerPromote['CustomerPromote']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Creator'); ?></th>
		<td>
			<?php echo $this->Html->link($customerPromote['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $customerPromote['TrackableCreator']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($customerPromote['CustomerPromote']['updated']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Updater'); ?></th>
		<td>
			<?php echo $this->Html->link($customerPromote['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $customerPromote['TrackableUpdater']['id'])); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

    
</div>


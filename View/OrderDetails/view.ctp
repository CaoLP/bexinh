<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Order Detail'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>'.__('Edit Order Detail'), array('action' => 'edit', $orderDetail['OrderDetail']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>'.__('Delete Order Detail'), array('action' => 'delete', $orderDetail['OrderDetail']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $orderDetail['OrderDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Order Details'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Order Detail'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Orders'), array('controller' => 'orders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Order'), array('controller' => 'orders', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Promotes'), array('controller' => 'promotes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Promote'), array('controller' => 'promotes', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Order'); ?></th>
		<td>
			<?php echo $this->Html->link($orderDetail['Order']['id'], array('controller' => 'orders', 'action' => 'view', $orderDetail['Order']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Product'); ?></th>
		<td>
			<?php echo $this->Html->link($orderDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $orderDetail['Product']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Price'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sku'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['sku']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qty'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['qty']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Promote'); ?></th>
		<td>
			<?php echo $this->Html->link($orderDetail['Promote']['name'], array('controller' => 'promotes', 'action' => 'view', $orderDetail['Promote']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Promote Value'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['promote_value']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Promote Type'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['promote_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Product Options'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['product_options']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Code'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Data'); ?></th>
		<td>
			<?php echo h($orderDetail['OrderDetail']['data']); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

    
</div>


<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Inout Warehouse Detail'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Inout Warehouse Detail'), array('action' => 'edit', $inoutWarehouseDetail['InoutWarehouseDetail']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Inout Warehouse Detail'), array('action' => 'delete', $inoutWarehouseDetail['InoutWarehouseDetail']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $inoutWarehouseDetail['InoutWarehouseDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Inout Warehouse Details'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Inout Warehouse Detail'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Inout Warehouses'), array('controller' => 'inout_warehouses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Inout Warehouse'), array('controller' => 'inout_warehouses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Inout Warehouse'); ?></th>
		<td>
			<?php echo $this->Html->link($inoutWarehouseDetail['InoutWarehouse']['id'], array('controller' => 'inout_warehouses', 'action' => 'view', $inoutWarehouseDetail['InoutWarehouse']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Product'); ?></th>
		<td>
			<?php echo $this->Html->link($inoutWarehouseDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $inoutWarehouseDetail['Product']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sku'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['sku']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qty'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['qty']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Price'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tax'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['tax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['total']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Options'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['options']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Option Names'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['option_names']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['name']); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

    
</div>


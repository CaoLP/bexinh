<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Product'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>'.__('Edit Product'), array('action' => 'edit', $product['Product']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>'.__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Products'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Providers'), array('controller' => 'providers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Provider'), array('controller' => 'providers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Inout Warehouse Details'), array('controller' => 'inout_warehouse_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Inout Warehouse Detail'), array('controller' => 'inout_warehouse_details', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Order Details'), array('controller' => 'order_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Order Detail'), array('controller' => 'order_details', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Product Categories'), array('controller' => 'product_categories', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product Category'), array('controller' => 'product_categories', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Product Options'), array('controller' => 'product_options', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product Option'), array('controller' => 'product_options', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sku'); ?></th>
		<td>
			<?php echo h($product['Product']['sku']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Provider'); ?></th>
		<td>
			<?php echo $this->Html->link($product['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $product['Provider']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Price'); ?></th>
		<td>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Retail Price'); ?></th>
		<td>
			<?php echo h($product['Product']['retail_price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Source Price'); ?></th>
		<td>
			<?php echo h($product['Product']['source_price']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Excert'); ?></th>
		<td>
			<?php echo h($product['Product']['excert']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descriptions'); ?></th>
		<td>
			<?php echo h($product['Product']['descriptions']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Creator'); ?></th>
		<td>
			<?php echo $this->Html->link($product['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $product['TrackableCreator']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($product['Product']['updated']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Updater'); ?></th>
		<td>
			<?php echo $this->Html->link($product['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $product['TrackableUpdater']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($product['Product']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Category'); ?></th>
		<td>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

            <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Related Inout Warehouse Details'); ?></h3>
                <?php if (!empty($product['InoutWarehouseDetail'])): ?>
                <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                    <thead>
                    <tr>
                        		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inout Warehouse Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Sku'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tax'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Options'); ?></th>
		<th><?php echo __('Option Names'); ?></th>
		<th><?php echo __('Name'); ?></th>
                        <th class="actions"></th>
                    </tr>
                    <thead>
                    <tbody>
                    	<?php foreach ($product['InoutWarehouseDetail'] as $inoutWarehouseDetail): ?>
		<tr>
			<td><?php echo $inoutWarehouseDetail['id']; ?></td>
			<td><?php echo $inoutWarehouseDetail['inout_warehouse_id']; ?></td>
			<td><?php echo $inoutWarehouseDetail['product_id']; ?></td>
			<td><?php echo $inoutWarehouseDetail['sku']; ?></td>
			<td><?php echo $inoutWarehouseDetail['qty']; ?></td>
			<td><?php echo $inoutWarehouseDetail['price']; ?></td>
			<td><?php echo $inoutWarehouseDetail['tax']; ?></td>
			<td><?php echo $inoutWarehouseDetail['total']; ?></td>
			<td><?php echo $inoutWarehouseDetail['options']; ?></td>
			<td><?php echo $inoutWarehouseDetail['option_names']; ?></td>
			<td><?php echo $inoutWarehouseDetail['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('controller' => 'inout_warehouse_details', 'action' => 'view', $inoutWarehouseDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('controller' => 'inout_warehouse_details', 'action' => 'edit', $inoutWarehouseDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'inout_warehouse_details', 'action' => 'delete', $inoutWarehouseDetail['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $inoutWarehouseDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <div class="actions">
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Inout Warehouse Detail'), array('controller' => 'inout_warehouse_details', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>                </div>
            </div><!-- end col md 12 -->
        </div>
            <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Related Order Details'); ?></h3>
                <?php if (!empty($product['OrderDetail'])): ?>
                <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                    <thead>
                    <tr>
                        		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Sku'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Promote Id'); ?></th>
		<th><?php echo __('Promote Value'); ?></th>
		<th><?php echo __('Promote Type'); ?></th>
		<th><?php echo __('Product Options'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Data'); ?></th>
                        <th class="actions"></th>
                    </tr>
                    <thead>
                    <tbody>
                    	<?php foreach ($product['OrderDetail'] as $orderDetail): ?>
		<tr>
			<td><?php echo $orderDetail['id']; ?></td>
			<td><?php echo $orderDetail['order_id']; ?></td>
			<td><?php echo $orderDetail['product_id']; ?></td>
			<td><?php echo $orderDetail['name']; ?></td>
			<td><?php echo $orderDetail['price']; ?></td>
			<td><?php echo $orderDetail['sku']; ?></td>
			<td><?php echo $orderDetail['qty']; ?></td>
			<td><?php echo $orderDetail['promote_id']; ?></td>
			<td><?php echo $orderDetail['promote_value']; ?></td>
			<td><?php echo $orderDetail['promote_type']; ?></td>
			<td><?php echo $orderDetail['product_options']; ?></td>
			<td><?php echo $orderDetail['code']; ?></td>
			<td><?php echo $orderDetail['data']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('controller' => 'order_details', 'action' => 'view', $orderDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('controller' => 'order_details', 'action' => 'edit', $orderDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'order_details', 'action' => 'delete', $orderDetail['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $orderDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <div class="actions">
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Order Detail'), array('controller' => 'order_details', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>                </div>
            </div><!-- end col md 12 -->
        </div>
            <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Related Product Categories'); ?></h3>
                <?php if (!empty($product['ProductCategory'])): ?>
                <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                    <thead>
                    <tr>
                        		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
                        <th class="actions"></th>
                    </tr>
                    <thead>
                    <tbody>
                    	<?php foreach ($product['ProductCategory'] as $productCategory): ?>
		<tr>
			<td><?php echo $productCategory['id']; ?></td>
			<td><?php echo $productCategory['product_id']; ?></td>
			<td><?php echo $productCategory['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('controller' => 'product_categories', 'action' => 'view', $productCategory['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('controller' => 'product_categories', 'action' => 'edit', $productCategory['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'product_categories', 'action' => 'delete', $productCategory['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $productCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <div class="actions">
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product Category'), array('controller' => 'product_categories', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>                </div>
            </div><!-- end col md 12 -->
        </div>
            <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Related Product Options'); ?></h3>
                <?php if (!empty($product['ProductOption'])): ?>
                <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                    <thead>
                    <tr>
                        		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Option Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
                        <th class="actions"></th>
                    </tr>
                    <thead>
                    <tbody>
                    	<?php foreach ($product['ProductOption'] as $productOption): ?>
		<tr>
			<td><?php echo $productOption['id']; ?></td>
			<td><?php echo $productOption['option_id']; ?></td>
			<td><?php echo $productOption['product_id']; ?></td>
			<td><?php echo $productOption['code']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('controller' => 'product_options', 'action' => 'view', $productOption['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('controller' => 'product_options', 'action' => 'edit', $productOption['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'product_options', 'action' => 'delete', $productOption['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $productOption['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <div class="actions">
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product Option'), array('controller' => 'product_options', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>                </div>
            </div><!-- end col md 12 -->
        </div>
            <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Related Warehouses'); ?></h3>
                <?php if (!empty($product['Warehouse'])): ?>
                <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                    <thead>
                    <tr>
                        		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Store Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Options'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Retail Price'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Updated By'); ?></th>
                        <th class="actions"></th>
                    </tr>
                    <thead>
                    <tbody>
                    	<?php foreach ($product['Warehouse'] as $warehouse): ?>
		<tr>
			<td><?php echo $warehouse['id']; ?></td>
			<td><?php echo $warehouse['store_id']; ?></td>
			<td><?php echo $warehouse['product_id']; ?></td>
			<td><?php echo $warehouse['options']; ?></td>
			<td><?php echo $warehouse['price']; ?></td>
			<td><?php echo $warehouse['retail_price']; ?></td>
			<td><?php echo $warehouse['qty']; ?></td>
			<td><?php echo $warehouse['code']; ?></td>
			<td><?php echo $warehouse['created']; ?></td>
			<td><?php echo $warehouse['created_by']; ?></td>
			<td><?php echo $warehouse['updated']; ?></td>
			<td><?php echo $warehouse['updated_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('controller' => 'warehouses', 'action' => 'view', $warehouse['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('controller' => 'warehouses', 'action' => 'edit', $warehouse['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'warehouses', 'action' => 'delete', $warehouse['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $warehouse['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <div class="actions">
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>                </div>
            </div><!-- end col md 12 -->
        </div>
    
</div>


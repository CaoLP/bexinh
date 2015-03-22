
<div class="panel-heading">
    <h3 class="panel-title">
		<a href="javascript:void(0);" class="toggle-sidebar">
			<span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
		<?php echo __('Orders'); ?>	</h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
			<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order'), array('action' => 'add'), array('escape' => false)); ?></li>
					<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Promotes'), array('controller' => 'promotes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Promote'), array('controller' => 'promotes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Order Details'), array('controller' => 'order_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order Detail'), array('controller' => 'order_details', 'action' => 'add'), array('escape' => false)); ?> </li>
		</ul>
    </div>
 <div class="col-md-12">
	<?php echo $this->Session->flash(); ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('code'); ?></th>
						<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th><?php echo $this->Paginator->sort('store_id'); ?></th>
						<th><?php echo $this->Paginator->sort('promote_id'); ?></th>
						<th><?php echo $this->Paginator->sort('promote_type'); ?></th>
						<th><?php echo $this->Paginator->sort('promote_value'); ?></th>
						<th><?php echo $this->Paginator->sort('basic_total'); ?></th>
						<th><?php echo $this->Paginator->sort('total'); ?></th>
						<th><?php echo $this->Paginator->sort('total_promote'); ?></th>
						<th><?php echo $this->Paginator->sort('amount'); ?></th>
						<th><?php echo $this->Paginator->sort('receive'); ?></th>
						<th><?php echo $this->Paginator->sort('refund'); ?></th>
						<th><?php echo $this->Paginator->sort('ship'); ?></th>
						<th><?php echo $this->Paginator->sort('ship_increment_price'); ?></th>
						<th><?php echo $this->Paginator->sort('ship_name'); ?></th>
						<th><?php echo $this->Paginator->sort('ship_address'); ?></th>
						<th><?php echo $this->Paginator->sort('ship_address_alt'); ?></th>
						<th><?php echo $this->Paginator->sort('ship_district'); ?></th>
						<th><?php echo $this->Paginator->sort('ship_city'); ?></th>
						<th><?php echo $this->Paginator->sort('ship_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('created_by'); ?></th>
						<th><?php echo $this->Paginator->sort('updated'); ?></th>
						<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($orders as $order): ?>
					<tr>
						<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['code']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($order['User']['name'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($order['Store']['name'], array('controller' => 'stores', 'action' => 'view', $order['Store']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($order['Promote']['name'], array('controller' => 'promotes', 'action' => 'view', $order['Promote']['id'])); ?>
		</td>
						<td><?php echo h($order['Order']['promote_type']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['promote_value']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['basic_total']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['total']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['total_promote']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['amount']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['receive']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['refund']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship_increment_price']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship_name']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship_address']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship_address_alt']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship_district']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship_city']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ship_phone']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($order['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $order['TrackableCreator']['id'])); ?>
		</td>
						<td><?php echo h($order['Order']['updated']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($order['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $order['TrackableUpdater']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $order['Order']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $order['Order']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $order['Order']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>
    </div>
</div>


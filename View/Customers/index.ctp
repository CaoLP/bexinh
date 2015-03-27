
<div class="panel-heading">
    <h3 class="panel-title">
		<a href="javascript:void(0);" class="toggle-sidebar">
			<span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
		<?php echo __('Customers'); ?>	</h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
			<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Customer'), array('action' => 'add'), array('escape' => false)); ?></li>
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Customer Promotes'), array('controller' => 'customer_promotes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Customer Promote'), array('controller' => 'customer_promotes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Orders'), array('controller' => 'orders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Order'), array('controller' => 'orders', 'action' => 'add'), array('escape' => false)); ?> </li>
		</ul>
    </div>
 <div class="col-md-12">
	<?php echo $this->Session->flash(); ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('facebook'); ?></th>
						<th><?php echo $this->Paginator->sort('address'); ?></th>
						<th><?php echo $this->Paginator->sort('district'); ?></th>
						<th><?php echo $this->Paginator->sort('city'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('created_by'); ?></th>
						<th><?php echo $this->Paginator->sort('updated'); ?></th>
						<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($customers as $customer): ?>
					<tr>
						<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['phone']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['facebook']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['district']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['city']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['created']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($customer['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $customer['TrackableCreator']['id'])); ?>
		</td>
						<td><?php echo h($customer['Customer']['updated']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($customer['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $customer['TrackableUpdater']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $customer['Customer']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $customer['Customer']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $customer['Customer']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
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


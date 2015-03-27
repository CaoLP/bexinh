<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Add Order'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Orders'), array('action' => 'index'), array('escape' => false)); ?></li>
            		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Promotes'), array('controller' => 'promotes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Promote'), array('controller' => 'promotes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Order Details'), array('controller' => 'order_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Order Detail'), array('controller' => 'order_details', 'action' => 'add'), array('escape' => false)); ?> </li>
        </ul>
    </div>
    <div class="col-md-12">
        			<?php echo $this->Form->create('Order', array('role' => 'form')); ?>

        				<div class="form-group">
					<?php echo $this->Form->input('code', array('class' => 'form-control', 'placeholder' => 'Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('customer_id', array('class' => 'form-control', 'placeholder' => 'Customer Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('store_id', array('class' => 'form-control', 'placeholder' => 'Store Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('promote_id', array('class' => 'form-control', 'placeholder' => 'Promote Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('promote_type', array('class' => 'form-control', 'placeholder' => 'Promote Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('promote_value', array('class' => 'form-control', 'placeholder' => 'Promote Value'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('basic_total', array('class' => 'form-control', 'placeholder' => 'Basic Total'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total', array('class' => 'form-control', 'placeholder' => 'Total'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_promote', array('class' => 'form-control', 'placeholder' => 'Total Promote'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('amount', array('class' => 'form-control', 'placeholder' => 'Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('receive', array('class' => 'form-control', 'placeholder' => 'Receive'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('refund', array('class' => 'form-control', 'placeholder' => 'Refund'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship', array('class' => 'form-control', 'placeholder' => 'Ship'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship_increment_price', array('class' => 'form-control', 'placeholder' => 'Ship Increment Price'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship_name', array('class' => 'form-control', 'placeholder' => 'Ship Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship_address', array('class' => 'form-control', 'placeholder' => 'Ship Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship_address_alt', array('class' => 'form-control', 'placeholder' => 'Ship Address Alt'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship_district', array('class' => 'form-control', 'placeholder' => 'Ship District'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship_city', array('class' => 'form-control', 'placeholder' => 'Ship City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ship_phone', array('class' => 'form-control', 'placeholder' => 'Ship Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
        				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>


    </div>
</div>


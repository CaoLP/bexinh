<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Add Customer Promote'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
                        <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Customer Promotes'), array('action' => 'index'), array('escape' => false)); ?></li>
            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Promotes'), array('controller' => 'promotes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Promote'), array('controller' => 'promotes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
        </ul>
    </div>
    <div class="col-md-12">
        			<?php echo $this->Form->create('CustomerPromote', array('role' => 'form')); ?>

        				<div class="form-group">
					<?php echo $this->Form->input('customer_id', array('class' => 'form-control', 'placeholder' => 'Customer Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('promote_id', array('class' => 'form-control', 'placeholder' => 'Promote Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('promote_code', array('class' => 'form-control', 'placeholder' => 'Promote Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('used', array('class' => 'form-control', 'placeholder' => 'Used'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('store_id', array('class' => 'form-control', 'placeholder' => 'Store Id'));?>
				</div>
        				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>


    </div>
</div>

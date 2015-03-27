<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Edit Customer Promote'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
                            <li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>'.__('Delete'), array('action' => 'delete', $this->Form->value('CustomerPromote.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('CustomerPromote.id'))); ?></li>
                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Customer Promotes'), array('action' => 'index'), array('escape' => false)); ?></li>
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
        			<?php echo $this->Form->create('CustomerPromote', array('role' => 'form')); ?>

        				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
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


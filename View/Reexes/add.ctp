<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Add Reex'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Reexes'), array('action' => 'index'), array('escape' => false)); ?></li>
            		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
        </ul>
    </div>
    <div class="col-md-12">
        			<?php echo $this->Form->create('Reex', array('role' => 'form')); ?>

        				<div class="form-group">
					<?php echo $this->Form->input('number', array('class' => 'form-control', 'placeholder' => 'Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('type', array('class' => 'form-control', 'placeholder' => 'Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('store_id', array('class' => 'form-control', 'placeholder' => 'Store Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total', array('class' => 'form-control', 'placeholder' => 'Total'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('person_one', array('class' => 'form-control', 'placeholder' => 'Person One'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('person_two', array('class' => 'form-control', 'placeholder' => 'Person Two'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company', array('class' => 'form-control', 'placeholder' => 'Company'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('note', array('class' => 'form-control', 'placeholder' => 'Note'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('created_date', array('class' => 'form-control', 'placeholder' => 'Created Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cause', array('class' => 'form-control', 'placeholder' => 'Cause'));?>
				</div>
        				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>


    </div>
</div>


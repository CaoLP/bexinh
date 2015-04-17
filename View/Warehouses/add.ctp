<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Add Warehouse'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>' . __('List Warehouses'), array('action' => 'index'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>' . __('New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>' . __('New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
        </ul>
    </div>
    <div class="col-md-12">
        <?php echo $this->Form->create('Warehouse', array('role' => 'form')); ?>
        <div class="form-group">
            <?php echo $this->Form->input('store_id', array('class' => 'form-control', 'placeholder' => 'Store Id')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('product_id', array('class' => 'form-control', 'placeholder' => 'Product Id','empty' => __('__Select Product__'))); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('price', array('class' => 'form-control currency', 'placeholder' => __('Leave empty if use basic price'), 'type'=>'text')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('retail_price', array('class' => 'form-control currency', 'placeholder' => __('Leave empty if use basic price'), 'type'=>'text')); ?>
        </div>
        <div class="form-group">
            <div id="warehouse-options" data-href="<?php echo $this->Html->url(array('controller'=>'product_options','action'=>'load_options'))?>"></div>
        </div>
        <div class="form-group">
            <?php if($this->request->isAjax()){ ?>
                <input class="btn btn-default" type="submit" value="Lưu lại">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <?php } else {?>
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            <?php } ?>
        </div>
        <?php echo $this->Form->end() ?>
    </div>
</div>


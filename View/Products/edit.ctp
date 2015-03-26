<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Edit Product'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Products'), array('action' => 'index'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Providers'), array('controller' => 'providers', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Provider'), array('controller' => 'providers', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Categories'), array('controller' => 'categories', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Category'), array('controller' => 'categories', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Inout Warehouse Details'), array('controller' => 'inout_warehouse_details', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Inout Warehouse Detail'), array('controller' => 'inout_warehouse_details', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Order Details'), array('controller' => 'order_details', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order Detail'), array('controller' => 'order_details', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Product Categories'), array('controller' => 'product_categories', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Product Category'), array('controller' => 'product_categories', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Product Options'), array('controller' => 'product_options', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Product Option'), array('controller' => 'product_options', 'action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Warehouses'), array('controller' => 'warehouses', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Warehouse'), array('controller' => 'warehouses', 'action' => 'add'), array('escape' => false)); ?> </li>
        </ul>
    </div>
    <div class="col-md-12">
        <?php echo $this->Form->create('Product', array('role' => 'form')); ?>

        <div class="form-group">
            <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('sku', array('class' => 'form-control', 'placeholder' => 'Sku')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('provider_id', array('class' => 'form-control', 'placeholder' => 'Provider Id')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('price', array('type'=>'text','class' => 'form-control currency', 'placeholder' => 'Price')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('retail_price', array('type'=>'text','class' => 'form-control currency', 'placeholder' => 'Retail Price')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('source_price', array('type'=>'text','class' => 'form-control currency', 'placeholder' => 'Source Price')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('excert', array('class' => 'form-control', 'placeholder' => 'Excert')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Media->ckeditor('descriptions', array('label'=> __('Descriptions'))); ?>
            <?php //echo $this->Form->input('descriptions', array('class' => 'form-control', 'placeholder' => 'Descriptions')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('category_id', array('class' => 'form-control', 'placeholder' => 'Category Id')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Media->iframe('Product', $this->request->data['Product']['id']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>

        <?php echo $this->Form->end() ?>


    </div>
</div>


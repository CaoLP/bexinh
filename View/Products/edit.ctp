<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Edit Product'); ?>    </h3>
</div>
<div class="panel-body">
    <?php echo $this->Form->create('Product', array('role' => 'form')); ?>
    <div class="col-md-12">
        <ul class="nav nav-pills pull-right">
            <li><button class="btn btn-info" type="submit" name="submit" value="save"><span class="glyphicon glyphicon-plus"></span> <?php echo __('Save product')?></button></li>
            <li><button class="btn btn-info"  type="submit" name="submit" value="addnew"><span class="glyphicon glyphicon-plus"></span> <?php echo __('Save product and Add new')?></button></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo __('Images') ?></div>
                    <div class="panel-body">
                        <?php echo $this->Media->iframe('Product', $this->request->data['Product']['id']); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
                <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('sku', array('class' => 'form-control', 'placeholder' => 'Sku')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('category_id', array('class' => 'form-control', 'placeholder' => 'Category Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('provider_id', array('class' => 'form-control', 'placeholder' => 'Provider Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('price', array('type' => 'text', 'class' => 'form-control currency', 'placeholder' => 'Price')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('retail_price', array('type' => 'text', 'class' => 'form-control currency', 'placeholder' => 'Retail Price')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('source_price', array('type' => 'text', 'class' => 'form-control currency', 'placeholder' => 'Source Price')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status')); ?>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <?php echo $this->Form->input('excert', array('class' => 'form-control', 'placeholder' => 'Excert')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Media->ckeditor('descriptions', array('label' => __('Descriptions'))); ?>
                <?php //echo $this->Form->input('descriptions', array('class' => 'form-control', 'placeholder' => 'Descriptions')); ?>
            </div>
            <div class="form-group">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo __('Options') ?></div>
                    <div class="panel-body">
                        <?php foreach ($product_options as $key => $opt_gr) {
                            ?>
                            <h4><?php echo $key ?></h4>
                            <?php
                            foreach ($opt_gr as $s_key => $opt) {
                                ?>
                                <div class="list-option">
                                    <div class="checkbox">
                                        <input type="checkbox" <?php
                                        foreach ($this->request->data['ProductOption'] as $op) {
                                            if ($op['option_id'] == $s_key) echo 'checked';
                                            else
                                                echo '';
                                        }
                                        ?> name="data[ProductOption][]"
                                               <?php if(!empty($opt['Option']['parent_id'])) echo ' disabled="true" class="parent-'.$opt['Option']['parent_id'].'" ';
                                               else echo ' class="option-checkbox" '
                                               ?>
                                               id="flat-checkbox-<?php echo $s_key; ?>" value="<?php echo $s_key; ?>">
                                        <label for="flat-checkbox-<?php echo $s_key; ?>"><?php echo $opt['Option']['name'] ?></label>
                                    </div>
                                </div>
                            <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <ul class="nav nav-pills pull-right">
            <li><button class="btn btn-info" type="submit" name="submit" value="save"><span class="glyphicon glyphicon-plus"></span> <?php echo __('Save product')?></button></li>
            <li><button class="btn btn-info"  type="submit" name="submit" value="addnew"><span class="glyphicon glyphicon-plus"></span> <?php echo __('Save product and Add new')?></button></li>
        </ul>
    </div>
    <?php echo $this->Form->end() ?>
</div>


<div class="panel panel-default">
    <div class="panel-heading"><?php echo __('Options') ?></div>
    <div class="panel-body">
        <div class="list-group">
            <div class="list-group-item">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        foreach ($product_options as $key => $optG) {
                            $opts = Set::combine($optG, '{n}.Option.id', '{n}.Option.name');
                            ?>
                            <div class="col-md-2 input-group-sm">
                                <?php echo $this->Form->input('Item.0.Option.', array('options' => $opts, 'empty' => $key, 'class' => 'form-control input-sm', 'label' => false)); ?>
                            </div>
                        <?php
                        }

                        ?>
                        <div class="col-md-2 input-group-sm">
                            <div class="input">
                                <input class="form-control input-sm"
                                       name="data[Item][0][qty]" value=""
                                       placeholder="Số lượng" data-type="number" min="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden" id="template">
        <div class="list-group-item">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    foreach ($product_options as $key => $optG) {
                        $opts = Set::combine($optG, '{n}.Option.id', '{n}.Option.name');
                        ?>
                        <div class="col-md-2 input-group-sm">
                            <?php echo $this->Form->input('Item.{{no}}.Option.', array('disabled'=>true,'options' => $opts, 'empty' => $key, 'class' => 'form-control input-sm', 'label' => false)); ?>
                        </div>
                    <?php
                    }

                    ?>
                    <div class="col-md-2 input-group-sm">
                        <div class="input">
                            <input disabled class="form-control input-sm"
                                   name="data[Item][{{no}}][qty]" value=""
                                   placeholder="Số lượng" data-type="number" min="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
            <a href="javascript:;" class="btn btn-primary">Thêm</a>
    </div>
</div>
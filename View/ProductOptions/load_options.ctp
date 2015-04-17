<div class="panel panel-default">
    <div class="panel-heading"><?php echo __('Options') ?></div>
    <div class="panel-body">
        <div class="list-group">
            <?php
            $options = $this->App->genOptions($product_options);

            foreach ($options as $key => $option) {
                ?>
                <div class="list-group-item">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <input type="checkbox" name="data[WarehouseOption][<?php echo $key ?>][options]"
                                           class="option-checkbox" id="flat-checkbox-<?php echo $key; ?>"
                                           value="<?php echo implode($option['option'], ',') ?>">
                                    <label
                                        for="flat-checkbox-<?php echo $key; ?>"><span class="label label-success"><?php echo implode($option['name'], '</span>,<span class="label label-success">') ?></span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control input-sm"
                                       name="data[WarehouseOption][<?php echo $key ?>][qty]" value="0" type="number" min="0">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            if (false)
                foreach ($product_options as $key => $opt_gr) {
                    ?>
                    <h4><?php echo $key ?></h4>
                    <?php
                    foreach ($opt_gr as $s_key => $opt) {
                        ?>
                        <div class="list-group-item">
                            <div class="list-option">
                                <div class="radio">
                                    <input type="radio"
                                           name="data[WarehouseOption][<?php echo $opt['Option']['option_group_id'] ?>][]"
                                        <?php if (!empty($opt['Option']['parent_id'])) echo ' disabled="true" class="parent-' . $opt['Option']['parent_id'] . '" ';
                                        else echo ' class="option-checkbox" '
                                        ?>
                                           id="flat-radio-<?php echo $s_key; ?>" value="<?php echo $s_key; ?>">
                                    <label
                                        for="flat-radio-<?php echo $s_key; ?>"><?php echo $opt['Option']['name'] ?></label>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } ?>
        </div>
    </div>
</div>
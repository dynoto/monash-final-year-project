<!-- SCRIPT INSERTED DIRECTLY -->
<script type="text/javascript">
    $(document).ready(function(){
        $('select#criteria_option').change(function(){
            $('[class^=criteria_]').addClass('hidden');
            $('[class^=criteria_]').children('select').attr('disabled', 'disabled');
            $('div.criteria_'+$(this).val()).removeClass('hidden');
            $('div.criteria_'+$(this).val()).children('select').removeAttr('disabled');
        });
    });
</script>
<!-- SCRIPT INSERTED DIRECTLY -->

<?php
echo $this->extend('/common/admins');
$content_override = array('css' => 'admins/common', 'title' => 'Add Kitchen Criteria Value', 'js' => NULL);
echo $this->element('override', array('content_override' => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul>
                <li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8 row-fluid">
        <?php echo $this->Form->create('CriteriaValuesKitchen'); ?>
        <fieldset>
            <div class="row-fluid">
                <h4><?php echo __('Add Kitchen Criteria'); ?></h4>
                <?php
                echo $this->Form->input('kitchen_id', array('type' => 'hidden', 'value' => $kitchen_data['Kitchen']['id']));
                echo $this->Form->input('kitchen_name', array('disabled', 'type' => 'text', 'value' => $kitchen_data['Kitchen']['name']));
                ?>
            </div>
            <div class="row-fluid">
                <div class="span4">
                    <p>Criteria Type</p>
                    <?php echo $this->Form->select('criteria_id', $criteria_ids,array('id'=>'criteria_option')); ?>
                </div>

                <div class="span8">
                    <p>Criteria Value</p>
                    <?php foreach ($criteria_data as $key_a => $val_a) { ?>
                        <div class="hidden <?php echo 'criteria_'.$val_a['Criteria']['id']; ?>">
                            <select name="data[CriteriaValuesKitchen][criteria_value_id]" disabled="disabled">
                                <?php foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) { ?>
                                    <option value="<?php echo $val_aa['id'] ?>"><?php echo $val_aa['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <?php
        echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-primary'));
        echo $this->Form->end();
        ?>
    </div>
</div>
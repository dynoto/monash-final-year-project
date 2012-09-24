<div class="span3">
    <div class="well span9 offset3" id="search_well">
        <?php echo $this->Form->Create('user',array('action'=>$user_action,'id'=>'criteria_filter')); ?>
        <?php foreach ($sidebar_data as $data){    ?>
            <h5><label class="search_label"><?php echo $data['name']; ?></label></h5>
            <select class="span12 criteria_filter" id="<?php echo 'search_'.$data['name']; ?>" name="<?php echo $data['name']; ?>[]" multiple="multiple" >
                <?php foreach ($data['values'] as $key=>$value) {  
                    if (in_array($key, $selected)){
                        $select = "selected";
                    }else {
                        $select = Null;
                    }
                    ?>
                <option value="<?php echo $key; ?>" <?php echo $select; ?>> <?php echo $value;?> </option>
                <?php } ?>
            </select>
        <?php } ?>
            <div class="row-fluid" id="action_buttons">
                <button type="reset" class="btn span6" id="sidebar_reset">Reset</button>
                <button type="submit" class="btn span6 btn-primary" id="sidebar_filter">Filter</button>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<div style="display:none">
    <?php echo $this->Form->Create('user',array('action'=>$user_action,'id'=>'hidden_criteria_filter')); ?>
    <input type="hidden" name="page_filter" id="page_filter" value="<?php echo $this_page; ?>"/>
    <?php foreach ($sidebar_data as $data){    ?>
            <select name="<?php echo $data['name']; ?>[]" multiple="multiple" >
                <?php foreach ($data['values'] as $key=>$value) {  
                        if (in_array($key, $selected)){ ?>
                            <option value="<?php echo $key; ?>" selected></option>
                <?php   }
                      } ?>
            </select>
        <?php }
    echo $this->Form->end(); ?>
</div>
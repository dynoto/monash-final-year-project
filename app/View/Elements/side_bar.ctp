<div class="span3">
    <div class="well span9 offset3" id="search_well">
        <?php echo $this->Form->Create('visitor',array('action'=>$visitor_action,'id'=>'criteria_filter')); ?>
        <?php 
            foreach ($sidebar_data as $data){
            echo $this->Form->input('CriteriaValuesKitchen.criteria_value_id.'.$data['id'],array('label'=>$data['name'],'id'=>'search_'.$data['name'],'multiple'=>'multiple','options'=>$data['values'],'selected'=>$selected,'hiddenField'=>null, 'class'=>'span12 criteria_filter'));
            } 
        ?>
            <div class="row-fluid" id="action_buttons">
                <?php echo $this->Html->link('Clear All',array('action'=>'gallery'),array('class'=>'btn span6','style'=>array('line-height:30px; font-size:15px; font-family:Helvetica')));?>
                <button type="submit" class="btn span6 btn-primary btn-large" id="sidebar_filter">Filter</button>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<div style="display:none">
    <?php echo $this->Form->Create('visitor',array('action'=>$visitor_action,'id'=>'hidden_criteria_filter')); ?>
    <input type="hidden" name="page_filter" id="page_filter" value="<?php echo $paginate_data['page']; ?>"/>
    <?php 
            foreach ($sidebar_data as $data){
            echo $this->Form->input('CriteriaValuesKitchen.criteria_value_id.'.$data['id'],array('label'=>$data['name'],'id'=>'search_'.$data['name'],'multiple'=>'multiple','options'=>$data['values'],'selected'=>$selected,'hiddenField'=>null, 'class'=>'span12'));
            } 
    echo $this->Form->end(); ?>
</div>
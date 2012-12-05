<?php
echo $this->extend('/Common/admins');
$content_override = array('title'=>'Manage Criteria','css'=>'admins/common');
echo $this->element('override',array("content_override"=>$content_override));
?>
<div class="row-fluid">
    <div class="span8 offset2">
        <div class="row-fluid">
            <h4 style="display: inline"><?php echo __('Criterias'); ?></h4>
            <?php echo $this->Html->link(__('New Criteria'), array('action' => 'add'),array('class'=>'btn' ,'style'=>'float:right')); ?>
        </div>
        <?php   
        $k_p = 'kitchen';
        $k_p_n = 'Gallery';
        for ($i=0; $i < 2; $i++){ ?>
        <div class="row-fluid">
            <h4>For <?php echo $k_p_n; ?></h4>
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php 
                foreach ($criterias as $criteria):
                if($criteria['Criteria'][$k_p] == 1){
                ?>
                <tr>
                    <td><?php echo h($criteria['Criteria']['id']); ?>&nbsp;</td>
                    <td><?php echo h($criteria['Criteria']['name']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $criteria['Criteria']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $criteria['Criteria']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $criteria['Criteria']['id']), null, __('Deleting criterias will REMOVE association from both KITCHENS and PRODUCTS.\nare you sure you want to do this?', $criteria['Criteria']['name'])); ?>
                    </td>
                </tr>
                <?php 
                }
                endforeach; ?>
            </table>
        </div>
        <?php   
        $k_p = 'product';
        $k_p_n = 'Product';
        } ?>
        <div class="row-fluid">
        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>	</p>

                <div class="paging">
                    <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                    ?>
                </div>
            </div>
        </div>
    </div>
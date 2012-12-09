<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'SK Kitchens Index', 'css' => 'admins/common', 'js' => array('admins/gallery_product_index','admins/post_link'));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
        <!-- <h4><?php echo __('Actions'); ?></h4> -->
        <ul class="nav nav-tabs nav-stacked">
        <li><?php echo $this->Html->link('Edit Gallery Criterias',array('action'=>'fill_missing_criteria')); ?></li>
        </ul>
    </div>
    </div>
    <div class="span8">
        <div class="row-fluid">
            <h4 class="ib">Gallery</h4>
            <?php echo $this->Html->link(__('New Gallery'), array('action' => 'add'), array('class' => 'pull-right btn')); ?>
        </div>
        <div class="row-fluid">
            <?php echo $this->Form->create('Kitchen'); ?>
            <table class="table table-striped table-bordered datatables">
                <thead>
                <tr>
                    <!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('priority'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($kitchens as $kitchen): ?>
                    <tr>
                        <!-- <td><?php echo h($kitchen['Kitchen']['id']); ?>&nbsp;</td> -->
                        <td><?php echo h($kitchen['Kitchen']['name']); ?>&nbsp;</td>
                        <td>
                            <div class="priority-view ib">
                            <?php echo h($kitchen['Kitchen']['priority']); ?>&nbsp;
                            </div>
                            <div class="invisible priority-edit ib">
                            <?php 
                            echo $this->Form->input($kitchen['Kitchen']['id'].'.id',array('value'=>$kitchen['Kitchen']['id']));
                            echo $this->Form->input($kitchen['Kitchen']['id'].'.priority',array('value'=>$kitchen['Kitchen']['priority'],'label'=>false,'div'=>false,'class'=>'no-margin')); ?>
                            </div>
                        </td>
                        <td class="actions">
                            <?php $deleteURL = $this->Html->url(array('controller'=>'kitchens','action'=>'delete',$kitchen['Kitchen']['id'])); ?>
                            <?php $postLink = 'postLink("'.$deleteURL.'")'; ?>
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $kitchen['Kitchen']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $kitchen['Kitchen']['id'])); ?>
                            <?php echo $this->Html->link(__('Delete'), '#', array('onclick'=>$postLink) ); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="pull-right">
                <?php 
                echo $this->Form->submit('Update Priority',array('class'=>'ib btn btn-submit-priority invisible btn-large btn-primary','div'=>false));
                echo $this->Form->button('Edit Priority',array('class'=>'ib btn btn-large btn-edit-priority','type'=>'button'));
                ?>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
        <!-- <div class="row-fluid">
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
        </div> -->
    </div>
</div>
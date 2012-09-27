<?php
echo $this->extend('/common/admins');
$content_override = array('title' => 'SK Kitchens Index', 'css' => 'admins/common', 'js' => NULL);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span8 offset2">
        <div class="row-fluid">
            <h4 style="display:inline"><?php echo __('Kitchens'); ?></h4>
            <?php echo $this->Html->link(__('New Kitchen'), array('action' => 'add'), array('class' => 'pull-right btn')); ?>
        </div>
        <div class="row-fluid">
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($kitchens as $kitchen): ?>
                    <tr>
                        <td><?php echo h($kitchen['Kitchen']['id']); ?>&nbsp;</td>
                        <td><?php echo h($kitchen['Kitchen']['name']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $kitchen['Kitchen']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $kitchen['Kitchen']['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kitchen['Kitchen']['id']), null, __('Are you sure you want to delete # %s?', $kitchen['Kitchen']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
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
<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <h2 class="text-center">Add Publication</h2>
    <?php echo $this->Form->create('Publication', array('type' => 'file', 'inputDefaults' => array('required' => false))); ?>
        <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('file', array('type' => 'file', 'class' => 'form-control')); ?>
        <?php echo $this->Form->input('body', array('class' => 'form-control')); ?>
        <div class="text-right">
            <?php echo $this->Form->submit('Save', array('div' => false, 'class' => 'btn btn-default')); ?>
        </div>
    <?php echo $this->Form->end(); ?>
</div>

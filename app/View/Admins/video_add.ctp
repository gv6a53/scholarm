<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <h2 class="text-center">Add Video</h2>
    <?php echo $this->Form->create('Video', array('inputDefaults' => array('required' => false))); ?>
        <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('video_type', array('options' => $videoTypes, 'class' => 'form-control')); ?>
        <?php echo $this->Form->input('video', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('body', array('class' => 'form-control')); ?>
        <div class="text-right">
            <?php echo $this->Form->submit('Save', array('div' => false, 'class' => 'btn btn-default')); ?>
        </div>
    <?php echo $this->Form->end(); ?>
</div>

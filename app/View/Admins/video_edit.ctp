<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <h2 class="text-center">Edit Video</h2>
    <?php echo $this->Form->create('Video', array('inputDefaults' => array('required' => false))); ?>
        <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('video_type', array('options' => $videoTypes, 'class' => 'form-control')); ?>
        <?php echo $this->Form->input('video', array('class' => 'form-control')); ?>
        <?php if($this->request->data['Video']['thumbnail']) { ?>
            <div style="margin: 10px 0 10px 0">
                <img src="<?php echo $this->request->data['Video']['thumbnail']; ?>" style="height: 160px;" />
            </div>
        <?php } ?>
        <?php echo $this->Form->input('body', array('class' => 'form-control')); ?>
        <div class="text-right">
            <?php echo $this->Form->submit('Edit', array('div' => false, 'class' => 'btn btn-default')); ?>
        </div>
    <?php echo $this->Form->end(); ?>
</div>

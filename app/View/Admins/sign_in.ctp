<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <?php echo $this->Form->create('Admin', array('inputDefaults' => array('required' => false, 'div' => false, 'label' => false))); ?>
        <h2 class="text-center">Sign In</h2>
        <label for="AdminUsername" class="sr-only">Username</label>
        <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
        <label for="AdminPassword" class="sr-only">Password</label>
        <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
        <div class="checkbox">
            <label>
                <?php echo $this->Form->input('remember_me', array('type' => 'checkbox')); ?> Remember me
            </label>
        </div>
        <?php echo $this->Form->submit('Sign In', array('div' => false, 'class' => 'btn btn-lg btn-primary btn-block')); ?>
    <?php echo $this->Form->end(); ?>
</div>

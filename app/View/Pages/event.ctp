<div class="container">
    <div class="row">
        <ul class="breadcrumb" style="margin-top: 20px;">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>">Home</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'events')); ?>">Events</a></li>
            <li class="active"><?php echo $event['Event']['title']; ?></li>
        </ul>
        <div class="col-lg-8">
            <h1><?php echo $event['Event']['title']; ?></h1>
            <p>
                <span class="glyphicon glyphicon-time"></span>
                Posted on <?php echo date('F d, Y', strtotime($event['Event']['created'])); ?>
            </p>
            <hr>
        </div>
    </div>
    <div class="col-lg-8 article">
        <?php if($event['Event']['thumbnail']) { ?>
            <div class="text-center">
                <div class="image">
                    <img src="/files/events/<?php echo $event['Event']['event_id']; ?>/<?php echo $event['Event']['thumbnail']; ?>" alt="" />
                </div>
            </div>
            <hr>
        <?php } ?>
        <p><?php echo $event['Event']['body']; ?></p>
    </div>
    <div class="col-lg-4">
        <div class="well">
            <h4>Search</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>
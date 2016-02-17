<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Events</a></li>
        <li class="active"><?php echo $event['Event']['title']; ?></li>
    </ul>
    <div class="article">
        <h2 class="title"><?php echo $event['Event']['title']; ?></h2>
        <?php if($event['Event']['thumbnail']) { ?>
            <div class="text-center">
                <div class="image">
                    <img src="/files/events/<?php echo $event['Event']['event_id']; ?>/<?php echo $event['Event']['thumbnail']; ?>" alt="" />
                </div>
            </div>
        <?php } ?>
        <div class="description"><?php echo $event['Event']['body']; ?></div>
    </div>
</div>
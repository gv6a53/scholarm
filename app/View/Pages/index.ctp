<div id="owl-demo" class="owl-carousel">
    <div class="item"><img src="/img/slider/slide2.png" alt="Owl Image"></div>
</div>
<div class="container">
    <div>
        <div class="col-sm-6 main-column">
            <h2>Interviews</h2>
            <?php foreach($interviews as $interview) { ?>
                <div class="single-article">
                    <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'interview', $interview['Interview']['interview_id'])); ?>">
                        <div class="image-container">
                            <div class="image" style="background: url('/files/interviews/<?php echo $interview['Interview']['interview_id']; ?>/<?php echo $interview['Interview']['thumbnail']; ?>') no-repeat; background-size: cover;"></div>
                        </div>
                        <div class="description">
                            <div class="date"><?php echo date('d l Y', strtotime($interview['Interview']['created'])); ?></div>
                            <h4><?php echo $interview['Interview']['title']; ?></h4>
                            <p><?php echo strlen(strip_tags($interview['Interview']['body'])) > 270 ? substr(strip_tags($interview['Interview']['body']), 0, 270) . '...' : strip_tags($interview['Interview']['body']); ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="col-sm-6 main-column">
            <h2>Events and Announcements</h2>
            <?php foreach($events as $event) { ?>
                <div class="single-article">
                    <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'event', $event['Event']['event_id'])); ?>">
                        <div class="image-container">
                            <div class="image" style="background: url('/files/events/<?php echo $event['Event']['event_id']; ?>/<?php echo $event['Event']['thumbnail']; ?>') no-repeat;"></div>
                        </div>
                        <div class="description">
                            <div class="date"><?php echo date('d l Y', strtotime($event['Event']['created'])); ?></div>
                            <h4><?php echo $event['Event']['title']; ?></h4>
                            <p><?php echo strlen(strip_tags($event['Event']['body'])) > 270 ? substr(strip_tags($event['Event']['body']), 0, 270) . '...' : strip_tags($event['Event']['body']); ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
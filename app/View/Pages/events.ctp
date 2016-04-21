<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Events and Announcements</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php foreach($events as $event) { ?>
                <div class="row" style="border: 1px solid #E6E9ED; border-radius: 3px; min-height: 120px; padding: 20px;">
                    <div class="col-xs-2" style="height: 100%;">
                        <div style="height: 100%; padding: 0 5px;">
                            <div style="height: 33%; background: #1B333D; color: #f0f0f0; text-align: center; padding-top: 1px; font-size: 18px; border-radius: 5px 5px 0 0;">
                                <?php echo date('M', strtotime($event['Event']['start_date'])); ?>
                            </div>
                            <div style="height: 67%; background: #F4F4F4; color: #1B333D; text-align: center; font-size: 35px; border-radius: 0 0 5px 5px;">
                                <?php echo date('d', strtotime($event['Event']['start_date'])); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div style="height: 100%;">
                            <a href="#" style="margin-bottom: 10px; display: block; letter-spacing: 0.02em; font-size: 18px; font-weight: bold; color: #1B333D; text-decoration: none;">
                                <?php echo strlen(strip_tags($event['Event']['title'])) > 330 ? substr(strip_tags($event['Event']['title']), 0, 330) . '...' : strip_tags($event['Event']['title']); ?>
                            </a>
                            <p style="font-size: 12px; color: #A0A0A0;">
                                <i class="glyphicon glyphicon-calendar"></i>
                                <?php echo date('d l Y', strtotime($event['Event']['start_date'])); ?>
                                <?php echo $event['Event']['location'] ? ', ' . $event['Event']['location'] : ''; ?>
                            </p>
                            <p style="color: #616161; text-align: justify; font-size: 15px;">
                                <?php echo strlen(strip_tags($event['Event']['body'])) > 340 ? substr(strip_tags($event['Event']['body']), 0, 340) . '...' : strip_tags($event['Event']['body']); ?>
                            </p>
                            <a style="margin-top: 30px;" class="read-more-button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'event', $event['Event']['event_id'])); ?>"><span>View More</span></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
</div>
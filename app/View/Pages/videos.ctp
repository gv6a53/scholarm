<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Page Heading
                <small>Secondary Text</small>
            </h1>
        </div>
    </div>
    <?php foreach($videos as $video) { ?>
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-4">
                <a href="#">
                    <div style="height: 190px; width 100%; background: url('<?php echo $video['Video']['thumbnail'] ? $video['Video']['thumbnail'] : 'http://placehold.it/700x300'; ?>'); background-size: cover; background-repeat: no-repeat;"></div>
                </a>
            </div>
            <div class="col-md-8">
                <h3><?php echo $video['Video']['title']; ?></h3>
                <h4><?php echo date('d l Y', strtotime($video['Video']['created'])); ?></h4>
                <p><?php echo strlen(strip_tags($video['Video']['body'])) > 270 ? substr(strip_tags($video['Video']['body']), 0, 270) . '...' : strip_tags($video['Video']['body']); ?></p>
                <a class="read-more-button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'video', $video['Video']['video_id'])); ?>"><span>View More</span></a>
            </div>
        </div>
        <hr />
    <?php } ?>
</div>
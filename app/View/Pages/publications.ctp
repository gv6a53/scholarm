<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Publications</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php foreach($publications as $publication) { ?>
                <div style="margin-bottom: 40px; border: 1px solid #E6E9ED; border-radius: 3px;">
                    <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'publication', $publication['Publication']['publication_id'])); ?>">
                        <div style="height: 400px; background: url('/files/publications/<?php echo $publication['Publication']['publication_id']; ?>/<?php echo $publication['Publication']['thumbnail']; ?>') no-repeat; background-size: cover;"></div>
                    </a>
                    <div style="padding: 30px 70px;">
                        <h2 style="font-size: 35px; line-height: 120%;">
                            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'publication', $publication['Publication']['publication_id'])); ?>" style="text-decoration: none; color: #0A4A5A;"><?php echo $publication['Publication']['title']; ?></a>
                        </h2>
                        <p style="color: #9E9E9E; font-size: 13px;"><?php echo date('F d, Y', strtotime($publication['Publication']['created'])); ?></p>
                        <p style="color: #616161; text-align: justify; line-height: 140%; font-size: 17px; font-family: 'Source Sans Pro', sans-serif"><?php echo strlen(strip_tags($publication['Publication']['body'])) > 330 ? substr(strip_tags($publication['Publication']['body']), 0, 330) . '...' : strip_tags($publication['Publication']['body']); ?></p>
                        <a style="margin-top: 30px;" class="read-more-button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'publication', $publication['Publication']['publication_id'])); ?>"><span>View More</span></a>
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
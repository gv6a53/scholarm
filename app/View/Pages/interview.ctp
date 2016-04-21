<div class="container">
    <div class="row">
        <ul class="breadcrumb" style="margin-top: 20px;">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>">Home</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'interviews')); ?>">Interviews</a></li>
            <li class="active"><?php echo $interview['Interview']['title']; ?></li>
        </ul>
        <div class="col-lg-8">
            <h1><?php echo $interview['Interview']['title']; ?></h1>
            <p>
                <span class="glyphicon glyphicon-time"></span>
                Posted on <?php echo date('F d, Y', strtotime($interview['Interview']['created'])); ?>
            </p>
            <hr>
        </div>
    </div>
    <div class="col-lg-8 article">
        <?php if($interview['Interview']['thumbnail']) { ?>
            <div class="text-center">
                <div class="image">
                    <img src="/files/interviews/<?php echo $interview['Interview']['interview_id']; ?>/<?php echo $interview['Interview']['thumbnail']; ?>" alt="" />
                </div>
            </div>
            <hr>
        <?php } ?>
        <p><?php echo $interview['Interview']['body']; ?></p>
        <?php if($interview['Interview']['video']) { ?>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo str_replace('watch?v=', 'v/', $interview['Interview']['video']); ?>"></iframe>
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
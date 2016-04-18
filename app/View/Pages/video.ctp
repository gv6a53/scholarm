<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1><?php echo $video['Video']['title']; ?></h1>
            <p>
                <span class="glyphicon glyphicon-time"></span>
                Posted on <?php echo date('F d, Y', strtotime($video['Video']['created'])); ?>
            </p>
            <hr>
        </div>
    </div>
        <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo str_replace('watch?v=', 'v/', $video['Video']['video']); ?>"></iframe>
            </div>
            <hr>
            <p><?php echo $video['Video']['body']; ?></p>
        </div>
        <div class="col-lg-4">
            <div class="well">
                <h4>Blog Search</h4>
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
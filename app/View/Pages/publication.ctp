<div class="container">
    <div class="row">
        <ul class="breadcrumb" style="margin-top: 20px;">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>">Home</a></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'publications')); ?>">Publications</a></li>
            <li class="active"><?php echo $publication['Publication']['title']; ?></li>
        </ul>
        <div class="col-lg-8">
            <h1><?php echo$publication['Publication']['title']; ?></h1>
            <p>
                <span class="glyphicon glyphicon-time"></span>
                Posted on <?php echo date('F d, Y', strtotime($publication['Publication']['created'])); ?>
            </p>
            <hr>
        </div>
    </div>
    <div class="col-lg-8 article">
        <?php if($publication['Publication']['thumbnail']) { ?>
            <div class="text-center">
                <div class="image">
                    <img src="/files/publications/<?php echo$publication['Publication']['publication_id']; ?>/<?php echo$publication['Publication']['thumbnail']; ?>" alt="" />
                </div>
            </div>
            <hr>
        <?php } ?>
        <p><?php echo$publication['Publication']['body']; ?></p>
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
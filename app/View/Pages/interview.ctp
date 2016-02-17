<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Interviews</a></li>
        <li class="active"><?php echo $interview['Interview']['title']; ?></li>
    </ul>
    <div class="article">
        <h2 class="title"><?php echo $interview['Interview']['title']; ?></h2>
        <?php if($interview['Interview']['thumbnail']) { ?>
            <div class="text-center">
                <div class="image">
                    <img src="/files/interviews/<?php echo $interview['Interview']['interview_id']; ?>/<?php echo $interview['Interview']['thumbnail']; ?>" alt="" />
                </div>
            </div>
        <?php } ?>
        <div class="description"><?php echo $interview['Interview']['body']; ?></div>
        <?php if($interview['Interview']['video']) { ?>
            <div class="text-center">
                <iframe width="420" height="315" src="<?php echo str_replace('watch?v=', 'v/', $interview['Interview']['video']); ?>"></iframe>
            </div>
        <?php } ?>
    </div>
</div>
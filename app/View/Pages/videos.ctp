<div class="container">
    <div>
        <h2>Videos</h2>
        <?php foreach($videos as $video) { ?>

                <div style="background: #f0ad4e; height: 250px;">
                    <ul style="list-style-type:none;">
                        <li style="float: left; border: 1px solid red; width: 250px; height: 250px;">
                            <div class="image" style="height: 250px; background: url('<?php echo $video['Video']['thumbnail']; ?>') no-repeat;"></div>
                        </li>
                        <li style="float: left; border: 1px solid red; width: 250px; height: 250px;">
                            <div class="date"><?php echo date('d l Y', strtotime($video['Video']['created'])); ?></div>
                            <h4><?php echo $video['Video']['title']; ?></h4>
                            <p><?php echo strlen(strip_tags($video['Video']['body'])) > 270 ? substr(strip_tags($video['Video']['body']), 0, 270) . '...' : strip_tags($video['Video']['body']); ?></p>
                        </li>
                    </ul>
                </div>

        <?php } ?>
    </div>
</div>
<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <h3>Videos List</h3>
    <div class="list-button-container">
        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'videoAdd')); ?>" class="btn btn-default">
            <i class="glyphicon glyphicon-plus"></i> Add New
        </a>
    </div>
    <div class="bootstrap-table">
        <?php if($videos) { ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center"><?php echo $this->Paginator->sort('video_id'); ?></th>
                        <th class="text-center"><?php echo $this->Paginator->sort('title'); ?></th>
                        <th class="text-center"><?php echo $this->Paginator->sort('video_type'); ?></th>
                        <th class="text-center"><?php echo $this->Paginator->sort('body'); ?></th>
                        <th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($videos as $video) { ?>
                        <tr>
                            <td class="text-center"><?php echo $video['Video']['video_id']; ?></td>
                            <td><?php echo strlen(strip_tags($video['Video']['title'])) > 50 ? substr($video['Video']['title'], 0, 50) . '...' : $video['Video']['title']; ?></td>
                            <td class="text-center"><?php echo ucfirst(str_replace('_', ' ', $video['Video']['video_type'])); ?></td>
                            <td><?php echo strlen(strip_tags($video['Video']['body'])) > 60 ? substr(strip_tags($video['Video']['body']), 0, 60) . '...' : strip_tags($video['Video']['body']); ?></td>
                            <td class="text-center"><?php echo $video['Video']['created']; ?></td>
                            <td class="text-center">
                                <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'event', $video['Video']['video_id'])); ?>" class="table-links">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'videoEdit', $video['Video']['video_id'])); ?>" class="table-links">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'videoRemove', $video['Video']['video_id'])); ?>" class="table-links">
                                    <i class="glyphicon glyphicon-remove"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="text-center">
                <div class="pagination">
                    <ul class="pagination">
                        <?php echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1)); ?>
                    </ul>
                </div>
            </div>
        <?php } else { ?>
            <h4 class="text-info" style="margin-top: 30px; font-style: italic;">There are no videos</h4>
        <?php } ?>
    </div>

</div>

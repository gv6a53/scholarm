<?php
/**
 * @var $this View
 */
?>
<div class="container">
    <h3>Publications List</h3>
    <div class="list-button-container">
        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'publicationAdd')); ?>" class="btn btn-default">
            <i class="glyphicon glyphicon-plus"></i> Add New
        </a>
    </div>
    <div class="bootstrap-table">
        <?php if($publications) { ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center"><?php echo $this->Paginator->sort('publication_id'); ?></th>
                        <th class="text-center"><?php echo $this->Paginator->sort('title'); ?></th>
                        <th class="text-center"><?php echo $this->Paginator->sort('body'); ?></th>
                        <th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($publications as $publication) { ?>
                        <tr>
                            <td class="text-center"><?php echo $publication['Publication']['publication_id']; ?></td>
                            <td><?php echo strlen(strip_tags($publication['Publication']['title'])) > 50 ? substr(strip_tags($publication['Publication']['title']), 0, 50) . '...' : strip_tags($publication['Publication']['title']); ?></td>
                            <td><?php echo strlen(strip_tags($publication['Publication']['body'])) > 60 ? substr(strip_tags($publication['Publication']['body']), 0, 60) . '...' : strip_tags($publication['Publication']['body']); ?></td>
                            <td class="text-center"><?php echo $publication['Publication']['created']; ?></td>
                            <td class="text-center">
                                <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'publication', $publication['Publication']['publication_id'])); ?>" class="table-links">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'publicationEdit', $publication['Publication']['publication_id'])); ?>" class="table-links">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'publicationRemove', $publication['Publication']['publication_id'])); ?>" class="table-links">
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
            <h4 class="text-info" style="margin-top: 30px; font-style: italic;">There are no publications</h4>
        <?php } ?>
    </div>

</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ScholArm</a>
        </div>
        <div class="collapse navbar-collapse" id="menu-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php if(!$admin) { ?>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'signIn')); ?>">Sign In</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'interviewsList')); ?>">Interviews</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'eventsList')); ?>">Events</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'publicationsList')); ?>">Publications</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'videosList')); ?>">Videos</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'signOut')); ?>">Sign Out</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
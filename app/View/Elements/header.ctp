<nav class="navbar navbar-default">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>">
                    <img src="/img/logo.png" />
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>" class="main-link">Home</a></li>
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'interviews')); ?>" class="main-link">Interviews</a></li>
                    <li class="dropdown">
                        <a href="#" class="main-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="glyphicon glyphicon-chevron-down arrow-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'events')); ?>">Events and Announcements</a></li>
                            <li><a href="#">Publications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="main-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Video Library <span class="glyphicon glyphicon-chevron-down arrow-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'armenian_studies')); ?>">Armenian studies</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'nagorno_karabakh')); ?>">Nagorno-Karabakh</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'current_issues')); ?>">Current issues</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'armenian_genocide')); ?>">Armenian Genocide</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'other')); ?>">Other</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="main-link">Introduction to Armenia</a></li>
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'aboutUs')); ?>" class="main-link">About us</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
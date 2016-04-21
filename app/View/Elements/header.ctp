<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>">
                <span class="logo-schol">Schol</span>
                <span class="logo-arm">Arm</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="link-container"><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>" class="main-link">Home</a></li>
                <li class="link-container"><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'interviews')); ?>" class="main-link">Interviews</a></li>
                <li class="link-container dropdown">
                    <a href="#" class="main-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'events')); ?>">Events and Announcements</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'publications')); ?>">Publications</a></li>
                    </ul>
                </li>
                <li class="link-container dropdown">
                    <a href="#" class="main-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Video Library <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'armenian_studies')); ?>">Armenian studies</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'nagorno_karabakh')); ?>">Nagorno-Karabakh</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'current_issues')); ?>">Current issues</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'armenian_genocide')); ?>">Armenian Genocide</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'videos', 'other')); ?>">Other</a></li>
                    </ul>
                </li>
                <li class="link-container"><a href="#" class="main-link">Introduction to Armenia</a></li>
                <li class="link-container"><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'aboutUs')); ?>" class="main-link">About us</a></li>
            </ul>
        </div>
    </div>
</nav>
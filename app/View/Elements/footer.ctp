<footer class="footer-distributed">
    <div class="footer-left">
        <h3>Schol<span>Arm</span></h3>
        <p class="footer-links">
            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>">Home</a> ·
            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'interviews')); ?>">Interviews</a> ·
            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'events')); ?>">Events and Announcements</a> ·
            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'aboutUs')); ?>">About us</a>
        </p>
        <p class="footer-company-name">ScholArm &copy; <?php echo date('Y'); ?></p>
    </div>
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Abelyan 9</span> Yerevan, Armenia</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>(+374) 96 500 214</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@scholarm.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About Us</span>
            <b>ScholArm</b> is a platform for international intellectuals studying or exploring Armenia, which aims to promote ...
            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'aboutUs')); ?>">Read more</a>
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</footer>
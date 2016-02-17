<?php

App::uses('CakeEmail', 'Network/Email');

/**
 * MailerComponent
 *
 * This component is used for handling automated emailing stuff
 *
 * @property EmailComponent $Email
 */
class MailerComponent extends Component
{
    public $components = array('Email');

    public $controller = null;
    public $Email = null;

    public function initialize(Controller $controller, $settings = array())
    {
        $this->controller = $controller;

        $this->Email =  new CakeEmail();

        $this->_set($settings);
    }

    /**
     * Startup component
     * @param Controller|object $controller Instantiating controller
     */
    public function startup(Controller $controller)
    {
        parent::startup($controller);
    }
}
<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $controller = null;
    public $action = null;

    /**
     * @var array
     */
    public $viewData = array();

    /**
     * Css file names that should be called from view
     * @var array
     */
    public $css = array();

    /**
     * Javascript file names that should be called from view
     * @var array
     */
    public $js = array();


    public function beforeFilter()
    {
        parent::beforeFilter();

        $this->css[] = 'lib/bootstrap.min';
        $this->css[] = 'lib/bootstrap-theme.min';
        $this->css[] = 'lib/owl.carousel';
        $this->css[] = 'lib/owl.theme';

        $this->js[] = 'lib/jquery.min';
        $this->js[] = 'lib/bootstrap.min';
        $this->js[] = 'lib/owl.carousel.min';
        $this->js[] = 'main';

        $this->controller = $this->viewData['controller'] = strtolower($this->params['controller']);
        $this->action = $this->viewData['action'] = $this->params['action'];
    }

    public function beforeRender()
    {
        parent::beforeRender();

        if($this->controller == 'admins') {
            $this->css[] = 'admin';
            $this->layout = 'admin';
        } else {
            $this->css[] = 'main';
            $this->layout = 'default';
        }

        $this->viewData['css'] = $this->css;
        $this->viewData['js'] = $this->js;

        $this->set($this->viewData);
    }
}

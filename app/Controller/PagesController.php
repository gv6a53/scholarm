<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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

App::uses('AppController', 'Controller');

/**
 * Pages Controller
 *
 * @package		app.Controller
 *
 * @property    Event $Event
 * @property    Interview $Interview
 * @property    Video $Video
 *
 * @property    SessionComponent $Session
 * @property    PaginatorComponent $Paginator
 */
class PagesController extends AppController
{
	/**
	 * The dependency of needed Models
	 * @var array
	 */
	public $uses = array('Event', 'Interview', 'Video');

	/**
	 * The dependency of needed Components
	 * @var array
	 */
	public $components = array('Session', 'Paginator');

	public function index()
	{

		$this->viewData['interviews'] = $this->Interview->find('all', array(
			'order' => array('Interview.interview_id' => 'DESC'),
			'limit' => 3
		));
		$this->viewData['events'] = $this->Event->find('all', array(
			'order' => array('Event.event_id' => 'DESC'),
			'limit' => 3
		));
	}

	public function videos($type = null)
	{
		if(!$type) {
			$this->redirect(array('controller' => 'pages', 'action' => 'index'));
		}

		$this->viewData['videosType'] = $type;
		$this->viewData['videos'] = $this->Video->find('all', array(
			'conditions' => array('Video.video_type' => $type)
		));
	}

	public function interviews()
	{
		$this->viewData['interviews'] = $this->Interview->find('all', array(
			'order' => array('Interview.interview_id' => 'DESC')
		));
	}

	public function interview($id = null)
	{
		if(!($interview = $this->Interview->findByInterviewId($id))) {
			$this->redirect(array('controller' => 'pages', 'action' => 'index'));
		}

		$this->viewData['interview'] = $interview;
	}

	public function events()
	{
		$this->viewData['events'] = $this->Event->find('all', array(
			'order' => array('Event.event_id' => 'DESC')
		));
	}

	public function event($id = null)
	{
		if(!($event = $this->Event->findByEventId($id))) {
			$this->redirect(array('controller' => 'pages', 'action' => 'index'));
		}

		$this->viewData['event'] = $event;
	}

	public function video($id = null)
	{
		if(!($video = $this->Video->findByVideoId($id))) {
			$this->redirect(array('controller' => 'pages', 'action' => 'index'));
		}

		$this->viewData['video'] = $video;
	}

	public function aboutUs()
	{

	}
}

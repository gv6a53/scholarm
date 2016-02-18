<?php

App::uses('AppController', 'Controller');

/**
 * Admins Controller
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
class AdminsController extends AppController
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

    public function eventAdd()
    {
        $this->js[] = '//cdn.tinymce.com/4/tinymce.min.js';
        $this->js[] = 'admins/event_add';

        if($this->request->is('post')) {
            $data = $this->request->data;
            $thumbnail = $data['Event']['thumbnail'];
            $data['Event']['thumbnail'] = md5($data['Event']['thumbnail']['name']) . '.' . pathinfo($data['Event']['thumbnail']['name'], PATHINFO_EXTENSION);

            if($event = $this->Event->save($data)) {
                if($thumbnail['tmp_name'] && is_uploaded_file($thumbnail['tmp_name'])) {
                    $filDir = WWW_ROOT . 'files/events/' . $event['Event']['event_id'] . '/';

                    if(!is_dir($filDir)) {
                        mkdir($filDir, 0777, true);
                    }

                    move_uploaded_file($thumbnail['tmp_name'], $filDir . $data['Event']['thumbnail']);
                }
            }
        }
    }

    public function interviewAdd()
    {
        $this->js[] = '//cdn.tinymce.com/4/tinymce.min.js';
        $this->js[] = 'admins/interview_add';

        if($this->request->is('post')) {
            $data = $this->request->data;
            $thumbnail = $data['Interview']['thumbnail'];
            $data['Interview']['thumbnail'] = md5($data['Interview']['thumbnail']['name']) . '.' . pathinfo($data['Interview']['thumbnail']['name'], PATHINFO_EXTENSION);

            if($interview = $this->Interview->save($data)) {
                if($thumbnail['tmp_name'] && is_uploaded_file($thumbnail['tmp_name'])) {
                    $filDir = WWW_ROOT . 'files/interviews/' . $interview['Interview']['interview_id'] . '/';

                    if(!is_dir($filDir)) {
                        mkdir($filDir, 0777, true);
                    }

                    move_uploaded_file($thumbnail['tmp_name'], $filDir . $interview['Interview']['thumbnail']);
                }
            }
        }
    }

    public function videoAdd()
    {
        $this->js[] = '//cdn.tinymce.com/4/tinymce.min.js';
        $this->js[] = 'admins/interview_add';

        if($this->request->is('post')) {
            $this->Video->save($this->request->data);
        }

        $this->viewData['videoTypes'] = array(
            'armenian_studies' => 'Armenian studies',
            'nagorno_karabakh' => 'Nagorno-Karabakh',
            'current_issues' => 'Current issues',
            'armenian_genocide' => 'Armenian Genocide',
            'other' => 'Other'
        );
    }
}
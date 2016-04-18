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
    public $components = array(
        'Session',
        'Paginator',
        'Auth' => array(
            'loginAction' => array('controller' => 'admins', 'action' => 'signIn'),
            'loginRedirect' => array('controller' => 'admins', 'action' => 'eventsList'),
            'logoutRedirect' => array('controller' => 'admins', 'action' => 'signIn'),
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Admin',
                    'fields' => array('username' => 'username', 'password' => 'password'),
                    'passwordHasher' => array('className' => 'Simple', 'hashType' => 'sha1')
                )
            )
        )
    );

    public function beforeRender()
    {
        $this->viewData['admin'] = $this->Auth->loggedIn();

        parent::beforeRender();
    }

    public function signIn()
    {
        if($this->request->is('post')) {
            if($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            }

            $this->Session->setFlash('Username or password is incorrect');
        }
    }

    public function signOut()
    {
        $this->redirect($this->Auth->logout());
    }

    public function eventsList()
    {
        $this->Paginator->settings = array(
            'order' => array('Event.event_id' => 'DESC'),
            'limit' => 10
        );
        $this->viewData['events'] = $this->Paginator->paginate('Event');
    }

    public function eventAdd()
    {
        $this->js[] = 'lib/tinymce/tinymce.min.js';
        $this->js[] = 'admins/event_add';

        if($this->request->is('post')) {
            $data = $this->request->data;

            if($event = $this->Event->save($data)) {
                if($data['Event']['file']['error'] != 4 && $data['Event']['file']['tmp_name'] && is_uploaded_file($data['Event']['file']['tmp_name'])) {
                    $filDir = WWW_ROOT . 'files/events/' . $event['Event']['event_id'] . '/';
                    $fileName = md5($data['Event']['file']['name']) . '.' . pathinfo($data['Event']['file']['name'], PATHINFO_EXTENSION);

                    if(!is_dir($filDir)) {
                        mkdir($filDir, 0777, true);
                    }

                    move_uploaded_file($data['Event']['file']['tmp_name'], $filDir . $fileName);

                    $this->Event->id = $event['Event']['id'];
                    $this->Event->saveField('thumbnail', $fileName);
                }

                $this->Session->setFlash('Event successfully added');
                $this->redirect(array('controller' => 'admins', 'action' => 'eventsList'));
            }
        }
    }

    public function eventEdit($id = null)
    {
        if(!($event = $this->Event->findByEventId($id))) {
            $this->Session->setFlash('Trying to modify unknown resource');
            $this->redirect(array('controller' => 'admins', 'action' => 'eventsList'));
        }

        $this->js[] = 'lib/tinymce/tinymce.min.js';
        $this->js[] = 'admins/event_add';

        if($this->request->is('put')) {
            $data = $this->request->data;

            $this->Event->id = $id;

            if($this->Event->save($data)) {
                if($data['Event']['file']['error'] != 4 && $data['Event']['file']['tmp_name'] && is_uploaded_file($data['Event']['file']['tmp_name'])) {
                    $filDir = WWW_ROOT . 'files' . DS . 'events' . DS . $id . DS;
                    $fileName = md5($data['Event']['file']['name']) . '.' . pathinfo($data['Event']['file']['name'], PATHINFO_EXTENSION);

                    if(!is_dir($filDir)) {
                        mkdir($filDir, 0777, true);
                    }

                    if($event['Event']['thumbnail'] && file_exists($filDir . $event['Event']['thumbnail'])) {
                        unlink($filDir . $event['Event']['thumbnail']);
                    }

                    move_uploaded_file($data['Event']['file']['tmp_name'], $filDir . $fileName);

                    $this->Event->saveField('thumbnail', $fileName);
                }

                $this->Session->setFlash('Event successfully modified');
                $this->redirect(array('controller' => 'admins', 'action' => 'eventsList'));
            }
        }

        $this->request->data = $event;
    }

    public function eventRemove($id = null)
    {
        if(!($event = $this->Event->findByEventId($id))) {
            $this->Session->setFlash('Trying to modify unknown resource');
            $this->redirect(array('controller' => 'admins', 'action' => 'eventsList'));
        }

        if($event['Event']['thumbnail']) {
            $filDir = WWW_ROOT . 'files' . DS . 'events' . DS . $id;

            if(file_exists($filDir . DS . $event['Event']['thumbnail'])) {
                unlink($filDir . DS . $event['Event']['thumbnail']);
            }

            rmdir($filDir);
        }

        $this->Event->delete($id);

        $this->Session->setFlash('Event successfully deleted');
        $this->redirect(array('controller' => 'admins', 'action' => 'eventsList'));
    }

    public function interviewsList()
    {
        $this->Paginator->settings = array(
            'order' => array('Interview.interview_id' => 'DESC'),
            'limit' => 10
        );
        $this->viewData['interviews'] = $this->Paginator->paginate('Interview');
    }

    public function interviewAdd()
    {
        $this->js[] = 'lib/tinymce/tinymce.min.js';
        $this->js[] = 'admins/interview_add';

        if($this->request->is('post')) {
            $data = $this->request->data;

            if($interview = $this->Interview->save($data)) {
                if($data['Interview']['file']['error'] != 4 && $data['Interview']['file']['tmp_name'] && is_uploaded_file($data['Interview']['file']['tmp_name'])) {
                    $filDir = WWW_ROOT . 'files/interviews/' . $interview['Interview']['interview_id'] . '/';
                    $fileName = md5($data['Interview']['file']['name']) . '.' . pathinfo($data['Interview']['file']['name'], PATHINFO_EXTENSION);

                    if(!is_dir($filDir)) {
                        mkdir($filDir, 0777, true);
                    }

                    move_uploaded_file($data['Interview']['file']['tmp_name'], $filDir . $fileName);

                    $this->Interview->id = $interview['Interview']['id'];
                    $this->Interview->saveField('thumbnail', $fileName);
                }

                $this->Session->setFlash('Interview successfully added');
                $this->redirect(array('controller' => 'admins', 'action' => 'interviewsList'));
            }
        }
    }

    public function interviewEdit($id = null)
    {
        if(!($interview = $this->Interview->findByInterviewId($id))) {
            $this->Session->setFlash('Trying to modify unknown resource');
            $this->redirect(array('controller' => 'admins', 'action' => 'interviewsList'));
        }

        $this->js[] = 'lib/tinymce/tinymce.min.js';
        $this->js[] = 'admins/interview_add';

        if($this->request->is('put')) {
            $data = $this->request->data;

            $this->Interview->id = $id;

            if($this->Interview->save($data)) {
                if($data['Interview']['file']['error'] != 4 && $data['Interview']['file']['tmp_name'] && is_uploaded_file($data['Interview']['file']['tmp_name'])) {
                    $filDir = WWW_ROOT . 'files' . DS . 'interviews' . DS . $id . DS;
                    $fileName = md5($data['Interview']['file']['name']) . '.' . pathinfo($data['Interview']['file']['name'], PATHINFO_EXTENSION);

                    if(!is_dir($filDir)) {
                        mkdir($filDir, 0777, true);
                    }

                    if($interview['Interview']['thumbnail'] && file_exists($filDir . $interview['Interview']['thumbnail'])) {
                        unlink($filDir . $interview['Interview']['thumbnail']);
                    }

                    move_uploaded_file($data['Interview']['file']['tmp_name'], $filDir . $fileName);

                    $this->Interview->saveField('thumbnail', $fileName);
                }

                $this->Session->setFlash('Interview successfully modified');
                $this->redirect(array('controller' => 'admins', 'action' => 'interviewsList'));
            }
        }

        $this->request->data = $interview;
    }

    public function interviewRemove($id = null)
    {
        if(!($interview = $this->Interview->findByInterviewId($id))) {
            $this->Session->setFlash('Trying to modify unknown resource');
            $this->redirect(array('controller' => 'admins', 'action' => 'interviewsList'));
        }

        if($interview['Interview']['thumbnail']) {
            $filDir = WWW_ROOT . 'files' . DS . 'interviews' . DS . $id;

            if(file_exists($filDir . DS . $interview['Interview']['thumbnail'])) {
                unlink($filDir . DS . $interview['Interview']['thumbnail']);
            }

            rmdir($filDir);
        }

        $this->Interview->delete($id);

        $this->Session->setFlash('Interview successfully deleted');
        $this->redirect(array('controller' => 'admins', 'action' => 'interviewsList'));
    }

    public function videosList()
    {
        $this->Paginator->settings = array(
            'order' => array('Video.video_id' => 'DESC'),
            'limit' => 10
        );
        $this->viewData['videos'] = $this->Paginator->paginate('Video');
    }

    public function videoAdd()
    {
        $this->js[] = 'lib/tinymce/tinymce.min.js';
        $this->js[] = 'admins/interview_add';

        if($this->request->is('post')) {
            if($video = $this->Video->save($this->request->data)) {
                $response = $this->getYoutubeThumbnail($video['Video']['video']);

                if(!isset($response->error)) {
                    $this->Video->id = $video['Video']['video_id'];
                    $this->Video->saveField('thumbnail', $response->items[0]->snippet->thumbnails->medium->url);
                }

                $this->Session->setFlash('Video successfully added');
                $this->redirect(array('controller' => 'admins', 'action' => 'videosList'));
            }
        }

        $this->viewData['videoTypes'] = array(
            'armenian_studies' => 'Armenian studies',
            'nagorno_karabakh' => 'Nagorno-Karabakh',
            'current_issues' => 'Current issues',
            'armenian_genocide' => 'Armenian Genocide',
            'other' => 'Other'
        );
    }

    public function videoEdit($id = null)
    {
        if(!($video = $this->Video->findByVideoId($id))) {
            $this->Session->setFlash('Trying to modify unknown resource');
            $this->redirect(array('controller' => 'admins', 'action' => 'videosList'));
        }

        $this->js[] = 'lib/tinymce/tinymce.min.js';
        $this->js[] = 'admins/interview_add';

        if($this->request->is('put')) {
            $data = $this->request->data;

            $this->Video->id = $id;

            if($this->Video->save($data)) {
                if($data['Video']['video'] != $video['Video']['video']) {
                    $response = $this->getYoutubeThumbnail($data['Video']['video']);

                    $this->Video->id = $video['Video']['video_id'];

                    if(!isset($response->error)) {
                        $this->Video->saveField('thumbnail', $response->items[0]->snippet->thumbnails->medium->url);
                    } else {
                        $this->Video->saveField('thumbnail', null);
                    }
                }

                $this->Session->setFlash('Video successfully modified');
                $this->redirect(array('controller' => 'admins', 'action' => 'videosList'));
            }
        }

        $this->request->data = $video;
        $this->viewData['videoTypes'] = array(
            'armenian_studies' => 'Armenian studies',
            'nagorno_karabakh' => 'Nagorno-Karabakh',
            'current_issues' => 'Current issues',
            'armenian_genocide' => 'Armenian Genocide',
            'other' => 'Other'
        );
    }

    public function videoRemove($id = null)
    {
        if(!($video = $this->Video->findByVideoId($id))) {
            $this->Session->setFlash('Trying to modify unknown resource');
            $this->redirect(array('controller' => 'admins', 'action' => 'videosList'));
        }

        $this->Video->delete($id);

        $this->Session->setFlash('Video successfully deleted');
        $this->redirect(array('controller' => 'admins', 'action' => 'videosList'));
    }

    public function getYoutubeThumbnail($videoUrl)
    {
        $youtubeId = explode('=', $videoUrl);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/videos?key=AIzaSyAvOuRY2AUI4DOgV4huLqIJg_6SsxeAQXQ&part=snippet&id=' . $youtubeId[1]);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Your application name');

        $query = curl_exec($curl);
        curl_close($curl);

        return json_decode($query);
    }
}
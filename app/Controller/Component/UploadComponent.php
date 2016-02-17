<?php

App::uses('Component', 'Controller');

/**
 * UploadComponent
 *
 * This component is used for handling error messages
 */
class UploadComponent extends Component
{
    const USER_IMAGE_PATH = 'files/users/%s/';
    const ITEM_PATH = 'files/items/%s/';
    const ITEM_IMAGE_PATH = 'files/items/%s/item-%s/';

    public function getUserImagePath($userId, $root = false)
    {
        return ($root ? WWW_ROOT : '') . sprintf(self::USER_IMAGE_PATH, $userId);
    }

    public function uploadUserImage($data)
    {
        $imagePath = $this->getUserImagePath($data['User']['user_id']);

        if(!file_exists($imagePath)) {
            mkdir($imagePath, 0775, true);
        }

        move_uploaded_file($data['User']['image']['tmp_name'], $imagePath . $data['User']['image']['name']);
    }

    public function getItemPath($itemId)
    {
        return WWW_ROOT . sprintf(self::ITEM_PATH, $this->convertToHash($itemId));
    }

    public function getItemImagePath($itemId, $root = true)
    {
        return ($root ? WWW_ROOT : '') . sprintf(self::ITEM_IMAGE_PATH, $this->convertToHash($itemId), $itemId);
    }

    public function uploadItemImages($images, $itemId)
    {
        $return = array();

        $imagesPath = $this->getItemImagePath($itemId);

        if(!file_exists($imagesPath)) {
            mkdir($imagesPath, 0775, true);
        }

        foreach($images as $image) {
            move_uploaded_file($image['image']['tmp_name'], $imagesPath . $image['name']);
        }

        return $return;
    }

    public function convertToHash($id, $length = 2)
    {
        return substr(strtolower(preg_replace('/[0-9_\/]+/', '', sha1($id))), 0, $length);
    }

    public function removeRecursive($dir)
    {
        $files = glob($dir . '*', GLOB_MARK);

        foreach($files as $file) {
            if(is_dir($file)) {
                $this->removeRecursive($file);
            } else {
                unlink($file);
            }
        }

        rmdir($dir);
    }
}
<?php

App::uses('Component', 'Controller');

/**
 * ErrorComponent
 *
 * This component is used for handling error messages
 */
class ErrorComponent extends Component
{
    /**
     * Get all errors from multidimensional arrays and put all into one associative array
     * @var array $errors
     * @return array $allErrors
     */
    public function getAllErrors($errors)
    {
        $allErrors = array();

        foreach($errors as $error) {
            if(!isset($error[0])) {
                $allErrors = array_merge($allErrors, $this->getAllErrors($error));
            } else {
                $allErrors[] = $error[0];
            }
        }

        return $allErrors;
    }

    /**
     * Prepare all errors to show in a view already separated into rows
     * @param array $errors
     * @return string
     */
    public function prepareErrorsForView($errors)
    {
        $allErrors = '<ul>';

        foreach($errors as $error) {
            $allErrors .= '<li>' . $error . '</li>';
        }

        return $allErrors . '</ul>';
    }
}
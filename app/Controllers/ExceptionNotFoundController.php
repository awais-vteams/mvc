<?php
namespace App\Controllers;

use App\Controllers\Controller;


/**
 * Class ExceptionNotFoundController
 */
class ExceptionNotFoundController extends Controller
{
    public $pageTitle = '404';

    /**
     * 404 view
     */
    public function get()
    {
        $this->view('404');
    }
}

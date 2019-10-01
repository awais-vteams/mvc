<?php

namespace App\Controllers;


/**
 * Class IndexController
 */
class IndexController extends Controller
{
    public $pageTitle = 'Index';
    public $message;

    /**
     * Show Index
     */
    public function index()
    {
        $this->view('index');
    }

    /**
     * POST save form
     */
    public function post()
    {
        $post = filter_post();

        $this->redirect('index');
    }
}

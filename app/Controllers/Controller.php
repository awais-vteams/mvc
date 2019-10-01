<?php

namespace App\Controllers;

use App\Models\Registration;

/**
 * Class Controller
 *Connects the database and models to the front-end views
 *
 * @package Awais
 */
abstract class Controller
{
    protected $pageTitle;
    protected $message;
    protected $model;
    public $view;

    /**
     * Initialize controller with Session, User, Comment, and List classes.
     */
    public function __construct()
    {
        $this->model = new Registration();
    }

    /**
     * @param $html
     * @return string
     */
    public function escape($html)
    {
        return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /**
     * Shortcut to retrieve JavaScript file from the /js/ directory.
     * Returns a URL.
     */
    protected function getScript($filename)
    {
        $file = strtolower($filename);

        return APP_URL . 'js/' . $file . '.js';
    }

    /**
     * Shortcut to retrieve stylesheet file from the /css/ directory.
     * Returns a URL.
     */
    protected function getStylesheet($filename)
    {
        $file = strtolower($filename);

        return APP_URL . 'css/' . $file . '.css';
    }

    /**
     * Shortcut to retrieve image file from the /images/ directory.
     * Returns a URL.
     */
    protected function getImage($filename)
    {
        $file = strtolower($filename);

        return APP_URL . 'images/' . $file;
    }

    /**
     * Retrieve a view URL by filename.
     * Requires a file.
     */
    protected function view($view)
    {
        $view = strtolower($view);

        require_once __DIR__ . '/../views/' . $view . '.view.php';
    }

    /**
     * Check if the current page is the Index.
     * Returns a Boolean.
     */
    protected function isIndex()
    {
        $redirect = ltrim($_SERVER['REDIRECT_URL'], '/');

        return $redirect === '';
    }

    /**
     * Check if the current page is specified page.
     * Returns a Boolean.
     */
    protected function isPage($view)
    {
        $view = strtolower($view);

        $redirect = ltrim($_SERVER['REDIRECT_URL'], '/');

        return $redirect === $view;
    }

    /**
     * Redirects to the specified page.
     */
    protected function redirect($view)
    {
        $view = strtolower($view);

        header('Location: ' . $view);
        exit;
    }

    /**
     * Get list of errors from validation.
     * Return a string.
     */
    protected function getErrors($errors)
    {
        foreach ($errors as $error) {
            $this->errorList .= $error . "\n";
        }
        return $this->errorList;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    protected function getParam($key)
    {
        return trim($_GET[$key] ?? NULL);
    }

    /**
     * @param $data
     */
    protected function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    public function flash($type, $message)
    {
        $_SESSION['flash'] = compact('type', 'message');
    }
}

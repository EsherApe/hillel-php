<?php


class Controller {

    /**
     * @var Model
     */
    public $model;

    /**
     * @var View
     */
    public $view;

    public function __construct()
    {
        $this->view = new View();

        $this->init();
    }

    public function init()
    {

    }

    function action_index()
    {
    }
}
<?php


class Controller_Articles extends Controller
{
    public function init()
    {
        $this->model = new Model_Articles();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('articles_view.php', 'template_view.php', $data);
    }
}
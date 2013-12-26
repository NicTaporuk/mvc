<?php
class Authorization extends Controller {

    public function __construct()
    {
        parent::__construct();
    }
    function Index()
    {
        $this->view->render('authorization/index',1);
    }
    /*
     *
     * */
    public function xhrSearch()
    {
        $this->model->xhrSearch();
    }
} 
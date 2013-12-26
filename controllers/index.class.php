<?php
    class Index extends Controller
    {
        function  __construct()
        {
            parent::__construct();
        }
        function Index()
        {
            $this->_view->smarty->assign('URL',URL);
            $this->_view->render('smarty');
        }
        function helloNick($args=false)
        {
//            $this->view->render('index/index',1);
        }
    }

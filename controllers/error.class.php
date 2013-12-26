<?php
/*
 * класс для  обработка ошибок
 * */
class Error extends Controller{
    function __construct()
    {
        parent::__construct();
//        echo 'This is error';
    }

    public function Index()
    {
        $this->_view->smarty->assign('URL',URL);
        $this->_view->render('smarty');
    }

} 
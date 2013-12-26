<?php
class Help extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "Я в папке controllers/help.php";

    }
    function Index()
    {
        $this->view->render('help/index',1);
    }
    function requaire()
    {
        require "models/help_model.php";
        $model = new Help_Model();
        $this->view->render('help/requaire',1);

    }
} 
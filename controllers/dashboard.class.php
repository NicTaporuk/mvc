<?php
class Dashboard extends Controller
{
    function __construct()
    {
//        echo "This is dashboard.class.php";
        parent::__construct();
        Session::init();
        $logged = Session::get('logedIn');
        if($logged==false)
        {
            Session::destroy();
            header("location: ../login");
            exit();
        }
        else
        {
//            header("location: dashboard");
//            exit();

        }
        /*
         * ввожу переменную для работы с javascript
         * */
        $this->view->js = array(
            '/dashboard/js/dashboard.js',
        );
    }

    function Index()
    {
        $this->view->render('dashboard/index',1);
    }
    function logout()
    {
        Session::destroy();
        header("location: ../login");
        exit();
    }

    //создаю функцию для работы со встакой данных через ajax
    public function xhrInsert()
    {
        $this->model->xhrInsert();
    }

    public function xhrSelect()
    {
        $this->model->xhrSelect();
    }
    public function xhrDelete()
    {
        $this->model->xhrDelete();
    }
}
<?php
class Produktgroups extends Controller {

    function  __construct()
    {
        parent::__construct();
//        echo "<br/>Я в папке controllers/ProduktGroups.class.php<br/>";
//        echo '<pre>';
//        var_dump(debug_backtrace());
//        echo '</pre>';
    }
    /*
     *
     * */
    function Index()
    {
//        echo URL;
//        $this->model->index();
        $this->_view->smarty->assign('URL',URL);
        $this->_view->render('smarty');

    }
    /*
     *
     * */
    function run()
    {
        $this->model->run();
    }
    /*
     *
     * */
    public  function xhrSearch()
    {
        $this->model->xhrSearch();
    }
    /*
     *
     * */
    public  function xhrDelete()
    {
        $this->model->xhrDelete();
    }
    /*
     *
     * */
    public  function xhrUpdate()
    {
        $this->model->xhrUpdate();
    }
    /*
     *
     * */
    public  function xhrSelect()
    {
        $this->model->xhrSelect();
    }
    /*
     *
     * */
    public  function xhrSelectionDirectory()
    {
        $this->model->xhrSelectionDirectory();
    }
     /*
     *
     * */
    public  function xhrInsert()
    {
        $this->model->xhrInsert();
    }
    /*
     *
     * */
    public  function xhrTreeLoad()
    {
        $this->model->xhrTreeLoad();
    }
    /*
     *
     * */
    public  function xhrDirDel()
    {
        $this->model->xhrDirDel();
    }
    /*
     *
     * */
    public  function xhrReloadDir()
    {
        $this->model->xhrReloadDir();
    }
}
?>
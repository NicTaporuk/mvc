<?php
class Login extends Controller
{
    function  __construct()
    {
        parent::__construct();
//        echo "<br/>Я в папке controllers/login.class.php<br/>";

    }
    function Index()
    {

        $sxd = new SxGeo(LIBS.'getIp/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
        $infoID=$sxd->get($_SERVER['HTTP_X_REAL_IP']);
//        print('<pre>');
//        print_r($_SERVER);
//        print_r($_FILES);
//        print_r($infoID);
//        print('</pre>');
        $this->_view->smarty->assign('URL',URL);
        $this->_view->smarty->assign('lat',$infoID['lat']);
        $this->_view->smarty->assign('lon',$infoID['lon']);
        $this->_view->render('smarty');

    }
    function run()
    {
        $this->model->run();
    }

}
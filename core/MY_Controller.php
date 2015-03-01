<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ini_set('display_errors', true);
        error_reporting(E_ALL + E_NOTICE);
        
        $this->load->model('_accounts');
        $this->template->assign('accounts', $this->_accounts->get());
   }

}

class Front_Controller extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function output($content)
    {
        $this->template->assign('content', $content);
        $this->template->display('index.tpl');
    }
    
    protected function _redirect($url){
        header('Location: '.$url);
    }
}

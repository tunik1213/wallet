<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('_accounts');
    }

    public function index()
    {
        $this->template->assign('active_page','accounts');
	$this->output($this->template->fetch('accounts.tpl'));
    }
    
    public function restore($id){
        if (!ord($id)>0) return;
        
        $this->_accounts->restore($id);
        
//        $this->template->assign('accounts', $this->_accounts->get());
//        $this->index();
          $this->_redirect('/accounts/');
    }
    
    public function correct(){
        $id = (int)filter_input(INPUT_POST, 'id');
        $sum = (float)filter_input(INPUT_POST, 'sum');

        $this->_accounts->correct($id,$sum);
        
//        $this->template->assign('accounts', $this->_accounts->get());
//        $this->index();
           $this->_redirect('/accounts/');
    }
}
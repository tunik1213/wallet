<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->template->assign('active_page','accounts');
	$this->output($this->template->fetch('accounts.tpl'));
    }
    
    public function restore($id){
        if (!ord($id)>0) return;
        
        $this->load->model('_accounts');
        $this->_accounts->restore($id);
        
        $this->template->assign('accounts', $this->_accounts->get());
        $this->index();
    }
}
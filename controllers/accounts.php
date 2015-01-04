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
}
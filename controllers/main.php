<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->template->assign('active_page','orders');
	$this->output($this->template->fetch('main.tpl'));
    }
}
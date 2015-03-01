<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends Front_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('_products');
        $this->load->model('_cats');
    }

    public function index()
    {
        $categories = $this->_cats->getAll(10);
        $this->template->assign('categories',$categories);
        
        $this->template->assign('active_page','products');
	$this->output($this->template->fetch('products.tpl'));
    }
}
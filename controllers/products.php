<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends Front_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('_products');
        $this->load->model('_category');
    }

    public function index()
    {
        $categories = $this->_category->getAll(10);
        $this->template->assign('categories',$categories);
        
        $this->template->assign('active_page','products');
	$this->output($this->template->fetch('products.tpl'));
    }

    public function addCat(){
        $name = filter_input(INPUT_POST, 'name');
        $pid = filter_input(INPUT_POST, 'pid');
        
        $this->load->model('_category');
        $this->_category->add($name,$pid);
        
        $this->_redirect('/products/');
    }
}
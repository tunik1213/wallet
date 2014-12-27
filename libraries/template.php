<?php
    require_once "Smarty/Smarty.class.php";

    class template extends Smarty {

        public $display_file;
        public $template = '';
        public $css = array();
        public $js = array();
        public $root_dir;


        function __construct() {
            parent::__construct();
//                      $this->caching = true;
            $this->template_dir = "application/views/";
            $this->root_dir = "application/views/";

            $this->compile_dir  = "application/views/compile/";
            $this->display_file = 'index.tpl';
        }


        function output($file = '') {
            $this->assign('root', $this->root_dir);
            $display = ($file == '') ? $this->display_file : $file;

            $this->display($display);
        }
    }
?>
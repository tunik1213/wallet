<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends Front_Controller {


    public function __construct() {
        parent::__construct();
        $this->output->enable_profiler(FALSE);

                header("Content-Type: application/json");
                header("Cache-Control: no-cache");
                header("Pragma: no-cache");
    }
    
    public function addAccount(){
        $newName = filter_input(INPUT_POST, 'name');
        //var_dump($_POST);return;
        $this->load->model('_accounts');
        $res = $this->_accounts->add($newName);
        
        $result = ['status'=> ($res) ? 'success' : 'error'
            ,'insertedId' => $res];

        echo json_encode($result);
    }
    
    public function deleteAccount(){
        $id = filter_input(INPUT_POST, 'id');
        
        $this->load->model('_accounts');
        $res = $this->_accounts->delete($id);
        
        $result = ['status'=> ($res) ? 'success' : 'error'
            ,'removedAcc' => $res];

        echo json_encode($result);
    }
}
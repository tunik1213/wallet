<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class _Accounts extends MY_model {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function get(){
        return $this->db->query(
                'select * from accounts'
                )->result_array();
    }
    
    public function add($name){
        $res = $this->db->query(
                'insert accounts(name) '
                . 'values ('.$this->db->escape($name).')'
                );
        if ($res)
            return $this->db->insert_id();
    }
}
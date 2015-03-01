<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class _Accounts extends MY_model {

    public function __construct()
    {
        parent::__construct();
    }
    public function get(){
        $this->db->select('*')
        ->where('deleted',FALSE);
        return $this->db->get('accounts')->result_array();
    }
    public function getId($id){            
        $this->db->select('*')
        ->where('id',$id);
        return $this->db->get('accounts')->row_array();
    }
    
    public function add($name){
        $res = $this->db->query(
                'insert accounts(name) '
                . 'values ('.$this->db->escape($name).')'
                );
        if ($res)
            return $this->db->insert_id();
    }
    
    public function delete($id){
        $res = $this->db->query(
                'update accounts '
                . 'set deleted = TRUE '
                . 'where id = '.$this->db->escape($id)
                );
        if ($res)
            return $this->getId($id);
    }
    
    public function restore($id){
        return $this->db->update(
                'accounts'
                ,['deleted' => FALSE]
                ,['id' => $id]
            );
            
    }

    public function correct($id,$sum){
        $this->db->insert('orders',[
            'type' => 1,
            'accountId' => $id,
            'sum' => $sum
        ]);
        return $this->db->insert_id();
    }
    
}
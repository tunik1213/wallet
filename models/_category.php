<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class _Category extends MY_model {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAll($limit=0){
        if ($limit > 0)
                $this->db->limit($limit);
        
        return $this->db->select('*')
                ->where('deleted',FALSE)
                ->get('categories')
                ->result_array();
    }
    
    public function add($name,$pid = 0){
        if ($name == '')            return 'имя не может быть пустым';
        if ($pid === NULL) $pid = 0;
        
        $existing = $this->db
                ->where('name',$name)
                ->select('count(*) co')
                ->get('categories')
                ->row_array();
        if ($existing['co'] > 0) {
            return 'категория с таким именем уже существует';
        }
        
        $this->db->set('name',$name)
                ->set('pid',$pid)
                ->insert('categories');
    }
}
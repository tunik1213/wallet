<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class _Products extends MY_model {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAll($limit=0){
        if ($limit > 0)
                $this->db->limit($limit);
        
        return $this->db->select('*')
                ->where('deleted',FALSE)
                ->get('products')
                ->result_array();
    }
}
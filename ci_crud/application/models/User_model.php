<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model {

    function __construct()
    {
         parent::__construct();
    }

    public function register($data)
    {
        $status = $this->db->insert('users', $data);
        return  $status;
          
    }

    public function checkUser($data)
    {

         $query = $this->db->get_where('users', array('email' => $data['email']));
    
        return  $query->num_rows();
          
    }

    public function checkUserPassword($data)
    {

         $query = $this->db->get_where('users', array('email' => $data['email'],'password' => $data['password']));
    
        return  $query->row_array();
          
    }

  

}
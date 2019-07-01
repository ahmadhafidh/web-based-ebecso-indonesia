<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebecso_model extends CI_Model{

  public function __construct(){
    parent::__construct();

  }



  function insert_data($table, $data){
    $this->db->insert($table, $data);
    return true;
  }

}

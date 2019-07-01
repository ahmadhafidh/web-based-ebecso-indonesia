<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration_model extends CI_Model
{
  public $table = 'registration';
  public $id    = 'id_registration';
  public $order = 'ASC';

  function get_all()
  {
    $this->db->order_by($this->id, $this->order);
    //return $this->db->get($this->table)->result();
	return $this->db->query('select * from registration as a, districts as b , provinces as c, regencies as d, villages as e where c.id = a.provinsi and b.id = a.kecamatan and d.id = a.kota and e.id = a.desa')->result();
  }

  // get data by id
  function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    $this->db->or_where('nama', $id);
    return $this->db->get($this->table)->row();    
  }

  function get_all_arsip($per_page,$dari)
  {
    $query = $this->db->get($this->table,$per_page,$dari);
    return $query->result();
  }
  
  // get total rows
  function total_rows() {
    return $this->db->get($this->table)->num_rows();
  }

  // insert data
  function insert($data)
  {
    $this->db->insert($this->table, $data);
  }

  // update data
  function update($id, $data)
  {
    $this->db->where($this->id,$id);
    $this->db->update($this->table, $data);
  }

  // delete data
  function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
  }
}
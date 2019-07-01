<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda_model extends CI_Model
{
  public $table = 'agenda';
  public $id    = 'id_agenda';
  public $order = 'ASC';

  function get_all()
  {
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();
  }

  function get_combo_agenda()
  {
    $this->db->order_by('judul_agenda', 'ASC');
    $query = $this->db->get($this->table);

    if($query->num_rows() > 0){
      $data = array();
      foreach ($query->result_array() as $row) 
      {
        $data[$row['id_agenda']] = $row['judul_agenda'];
      }
      return $data;
    }
  }
  function get_all_limit_agenda()
  {
    $this->db->limit(3);
    $this->db->where('publish','ya');
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();

  }

  function get_all_new_agenda()
  {
    $this->db->limit(4);
    $this->db->where('publish','ya');
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();
  }

  // get data by id
  function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    $this->db->or_where('judul_agenda', $id);
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
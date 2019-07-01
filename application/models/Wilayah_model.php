<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wilayah_model extends CI_Model
{
  public $table = 'wilayah';
  public $id    = 'id_wilayah';
  public $order = 'ASC';

  // get all
  function get_all()
  {
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();
  }
  // untuk mengambil data wilayah yang akan d tampilkan d bagian front ebecso
  function get_data(){
    $data = $this->db->get($this->table);
    return $data->result();
  }

  function get_combo_wilayah()
  {
    $this->db->order_by('nama_wilayah', 'ASC');
    $query = $this->db->get($this->table);

    if($query->num_rows() > 0){
      $data = array();
      foreach ($query->result_array() as $row) 
      {
        $data[$row['nama_wilayah']] = $row['nama_wilayah'];
      }
      return $data;
    }
  }

  function get_all_new_home()
  {
    $this->db->limit(4); 
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();
  }

  function get_all_wilayah_sidebar()
  {
    $this->db->order_by('nama_wilayah', 'asc');
    return $this->db->get($this->table)->result();
  }

  function get_total_row_wilayah()
  {
    return $this->db->get($this->table)->count_all_results();
  }

  function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row(); 
  }

  // function get_by_id_front($id)
  // {
  //   $this->db->from('berita');
  //   $this->db->where('kategori_seo', $id);
  //   $this->db->join('kategori', 'berita.kategori = kategori.judul_kategori');
  //   return $this->db->get();    
  // }

  // get total rows
  function total_rows() 
  {
    return $this->db->get($this->table)->num_rows();
  }

  function insert($data)
  {
    $this->db->insert($this->table, $data);
  }

  function update($id, $data)
  {
    $this->db->where($this->id,$id);
    $this->db->update($this->table, $data);
  }
  
  function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
  }

}
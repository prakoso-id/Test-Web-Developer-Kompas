<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	public function __construct() {
		parent::__construct();
  }


  public function get_user(){
    $this->db->select('*');
    $this->db->from('m_user');
    return $this->db->get()->result();
  }

  public function get_user_detail($id){
    $this->db->select('*');
    $this->db->from('m_user');
    $this->db->where('id',$id);

    return $this->db->get()->row();
  }

  public function insert($data){
    $this->db->set('cdd', date('Y-m-d H:i:s'));
    $this->db->insert('m_user',$data);
    return $this->db->insert_id();
  }

  public function update($where, $data){
    $this->db->set('udd', date('Y-m-d H:i:s'));
    $this->db->update('m_user', $data, $where);
    return $this->db->affected_rows();
  }


  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('m_user');
    return $this->db->affected_rows();

  }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Model {
    
    private $table = 'kategori';

	public function all()
	{
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);	
	}

	public function find($id)
	{	
		return $this->db->get_where($this->table, array('id_kategori' => $id))->row();
	}

	public function update($id, $data)
	{	
		$this->db->where('id_kategori', $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id)
	{	
		$this->db->where('id_kategori', $id);
		return $this->db->delete($this->table);
	}


}

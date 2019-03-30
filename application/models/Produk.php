<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Model {
    
    private $table = 'produk';

	public function all_product()
	{
        $this->db->select('produk.*, kategori.nama AS kategori, kategori.id_kategori AS id_kategori');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');
        return $this->db->get();
	}

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
		$this->db->select('produk.*, kategori.nama AS kategori, kategori.id_kategori AS id_kategori');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');
		$this->db->where('id_produk', $id);
        return $this->db->get()->row();
		//return $this->db->get_where($this->table, array('id_kategori' => $id))->row();
	}

	public function update($id, $data)
	{	
		$this->db->where('id_produk', $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id)
	{	
		$this->db->where('id_produk', $id);
		return $this->db->delete($this->table);
	}


}

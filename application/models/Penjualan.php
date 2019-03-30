<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Model {
    
    private $table = 'penjualan';

	public function all_penjualan()
	{
        $this->db->select('penj.waktu_penjualan, penj.id_penjualan AS id_p, pr.*, pp.*');
        $this->db->from('penjualan AS penj');
        $this->db->join('penjualan_produk AS pp', 'pp.id_penjualan = penj.id_penjualan');
        $this->db->join('produk AS pr', 'pr.id_produk = pp.id_produk');
        return $this->db->get();
	}

	public function all()
	{
		return $this->db->get($this->table);
	}

	public function cart()
	{
		$this->db->select('*');
		$this->db->where('id_penjualan', 0);
        $this->db->from('penjualan_produk AS pp');
        $this->db->join('produk AS pr', 'pr.id_produk = pp.id_produk', 'INNER');
        return $this->db->get();
	}

	public function addToCart($data=null){
		return $this->db->insert('penjualan_produk', $data);
	}

	public function save($data, $new_data=null)
	{
		$this->db->insert($this->table, $data);	
		$row = $this->db->query('SELECT MAX(id_penjualan) AS id_penjualan FROM `penjualan`')->row();
		$id_penjualan = $row->id_penjualan;

		$new_data = array(
			'id_penjualan' => $id_penjualan
		);
		$this->db->where('id_penjualan', 0);

		// $this->db->set($new_data);
		return $this->db->update('penjualan_produk', $new_data);
	}

	public function find($id)
	{	
	
		return $this->db->get_where($this->table, array('id_penjualan' => $id))->row();
        return $this->db->row();
		//return $this->db->get_where($this->table, array('id_kategori' => $id))->row();
	}

	public function produk_penjualan($id)
	{
        $this->db->select('penj.*, penj.id_penjualan AS id_p, pr.*, pp.*');
		$this->db->from('penjualan AS penj');
		$this->db->where('penj.id_penjualan', $id);
        $this->db->join('penjualan_produk AS pp', 'pp.id_penjualan = penj.id_penjualan', 'INNER');
        $this->db->join('produk AS pr', 'pr.id_produk = pp.id_produk', 'INNER');
        return $this->db->get()->result();
	}

	public function delete($id)
	{	
		$this->db->where('id_penjualan', $id);
		return $this->db->delete($this->table);
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenjualanController extends CI_Controller {
	
    private $view_index = 'penjualan/index';
    private $view_show = 'penjualan/show';
    private $view_create = 'penjualan/create';
    private $view_edit = 'penjualan/edit';

    public function index()
    {
        $data['penjualan_penjualan'] = $this->Penjualan->all_penjualan();
        show($this->view_index, $data);
    }
    public function create()
    {
        $data['semua_produk'] = $this->Produk->all();
        $data['produk_produk'] = $this->Penjualan->cart();
        show($this->view_create, $data);
    }

    public function add()
    {
        if($this->input->method() != 'post')
        {
            return $this->create();
        } 
        else 
        {
            $data = array(
                'id_penjualan' => 0,
                'id_produk' => $this->input->post('id_produk'),
                'jumlah' => $this->input->post('jumlah'),
            );
            $this->Penjualan->addToCart($data);
            return $this->create();
        }
    }

    public function store()
    {
        if($this->input->method() != 'post')
        {
            return $this->create();
        } 
        else 
        {
            $data = array(
                'waktu_penjualan' => $this->input->post('tanggal'),
            );
            $this->Penjualan->save($data);
            return $this->index();
        }
    }

    public function show($id)
    {
        $data['penjualan'] = $this->Penjualan->find($id);
        $data['produk_produk'] = $this->Penjualan->produk_penjualan($id);
        show($this->view_show, $data);
    }

    public function destroy($id)
    {
        $this->Penjualan->delete($id);
        return redirect('penjualan');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller {
	
    private $view_index = 'produk/index';
    private $view_show = 'produk/show';
    private $view_create = 'produk/create';
    private $view_edit = 'produk/edit';

    public function index()
    {
        $data['produk_produk'] = $this->Produk->all_product();
        show($this->view_index, $data);
    }
    public function create()
    {
        $data['kategori_kategori'] = $this->Kategori->all();
        show($this->view_create, $data);
    }
    public function store()
    {
        if($this->input->method() != 'post')
        {
            $data['produk_produk'] = $this->Produk->all();
            return redirect('produk');
        } 
        else 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'id_kategori' => $this->input->post('id_kategori'),
                'stok' => $this->input->post('stok'),
            );
            $this->Produk->save($data);
            return redirect('produk');
        }
    }
    public function show($id)
    {
        $data['produk'] = $this->Produk->find($id);
        show($this->view_show, $data);
    }
    public function edit($id)
    {
        $data['kategori_kategori'] = $this->Kategori->all();
        $data['produk'] = $this->Produk->find($id);
        show($this->view_edit, $data);
    }
    public function update($id)
    {
        if($this->input->method() != 'post'){
            return redirect('produk');
        } 
        else 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'id_kategori' => $this->input->post('id_kategori'),
                'stok' => $this->input->post('stok')
            );
            $this->Produk->update($id, $data);
            return redirect('produk');
        }
    }
    public function destroy($id)
    {
        $this->Produk->delete($id);
        return redirect('produk');
    }
}

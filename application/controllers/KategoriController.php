<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller {
	
    private $view_index = 'kategori/index';
    private $view_show = 'kategori/show';
    private $view_create = 'kategori/create';
    private $view_edit = 'kategori/edit';

    public function index()
    {
        $data['kategori_kategori'] = $this->Kategori->all();
		show($this->view_index, $data);
    }
    public function create()
    {
        show($this->view_create);
    }
    public function store()
    {
        if($this->input->method() != 'post')
        {
            return redirect('kategori');
        } 
        else 
        {
            $data = array(
                'nama' => $this->input->post('nama')
            );
            $this->Kategori->save($data);
            return redirect('kategori');
        }
    }
    public function show($id)
    {
        $data['kategori'] = $this->Kategori->find($id);
        show($this->view_show, $data);
    }
    public function edit($id)
    {
        $data['kategori'] = $this->Kategori->find($id);
        show($this->view_edit, $data);
    }
    public function update($id)
    {
        if($this->input->method() != 'post'){
            return redirect('kategori');
        } 
        else 
        {
            $data = array(
                'nama' => $this->input->post('nama')
            );
            $this->Kategori->update($id, $data);
            return redirect('kategori');
        }
    }
    public function destroy($id)
    {
        $this->Kategori->delete($id);
        return redirect('kategori');
    }
}

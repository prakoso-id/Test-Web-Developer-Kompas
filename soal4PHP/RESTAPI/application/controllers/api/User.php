<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class User extends RestController {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model','user');
    }
	public function index_get()
	{
        $id = $this->get('id');
        if ($id == '') {
            $data = $this->user->get_user();
        }else{
            $data = $this->user->get_user_detail($id);
        }

        $this->response($response = [
            'status'=>true,
            'data'=>$data
        ],200);
	}

    public function add_post(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'umur' => $this->input->post('umur'),
        );
        $add = $this->user->insert($data);
        if($add){
            
            $this->response($response = [
                'status'=>true,
                'message'=>'berhasil tambah user',
            ],200);
        }else{
            $this->response($response = [
                'status'=>false,
                'message'=>'gagal tambah user',
            ],502);
            
        }
    }

    public function edit_put(){

        $where = array(
            'id' => $this->put('id'),
        );
        $data = array(
            'nama' => $this->put('nama'),
            'umur' => $this->put('umur'),
        );
        $update = $this->user->update($where, $data);

        if($update){
            
            $this->response($response = [
                'status'=>true,
                'message'=>'berhasil ubah user',
            ],200);
        }else{
            $this->response($response = [
                'status'=>false,
                'message'=>'gagal ubah user',
            ],502);
            
        }
    }

    public function hapus_delete(){

        $delete = $this->user->delete($this->delete('id'));

        if($delete){
            $this->response($response = [
                'status'=>true,
                'message'=>'berhasil menghapus user',
            ],200);
        }else{
            $this->response($response = [
                'status'=>false,
                'message'=>'gagal menghapus user',
            ],502);
        }
    }
}

?>

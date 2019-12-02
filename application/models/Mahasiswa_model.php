<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table = "mahasiswa";

    public $nim;
    public $nama;
    public $alamat;
    // public $image = "default.jpg";
    // public $description;

    public function rules()
    {
        return [
            ['field' => 'nim',
            'label' => 'NIM',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            // ['field' => 'description',
            // 'label' => 'Description',
            // 'rules' => 'required']
        ];
    }



    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nim" => $id])->row();
    }



    public function save()
    {
        $post = $this->input->post();
        $this->nim = $post["nim"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        // $this->image = $this -> _uploadImage();
        // $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }



    public function update()
    {
        $post = $this->input->post();
        $this->nim = $post["nim"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];


        // if (!empty($_FILES["image"]["name"])) {
        // $this->image = $this->_uploadImage();
        // } else {
        // $this->image = $post["old_image"];
        // }


        // $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('nim' => $post['nim']));
    }

    public function delete($nim)
    {
        return $this->db->delete($this->_table, array("nim" => $nim));
    }

//     private function _uploadImage()
// {
//     $config['upload_path']          = './upload/product/';
//     $config['allowed_types']        = 'gif|jpg|png';
//     $config['file_name']            = $this->product_id;
//     $config['overwrite']            = true;
//     $config['max_size']             = 1024; // 1MB
//     // $config['max_width']            = 1024;
//     // $config['max_height']           = 768;

//     $this->load->library('upload', $config);

//     if ($this->upload->do_upload('image')) {
//         return $this->upload->data("file_name");
//     }
    
//     return "default.jpg";
// }
}
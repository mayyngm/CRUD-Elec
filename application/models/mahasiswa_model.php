<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model{

    public function getAllmahasiswa()
    {
        
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selectingdata
        // $quey digunakan untuk menampung isi dari tabel mahasiswa
        $query = $this->db->get('mahasiswa');

        // https://www.codeigniter.com/user_guide/database/results.html
        // untuk menampilkan isi dari query
        return $query->result_array();

        //atau bisa menggunakan code berikut
        //return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahdatamhs($data){

        // vardump($data);
        $data=[
            "nim" => $this->input->post('nim',true),
            "nama" => $this->input->post('nama',true), // ini sama dengan htmlspecialchars($_POST['nama])
            "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
            "fotoMhs" => $this->input->post('fotoMhs',true),
            "fotoKtp" => $this->input->post($data['upload_data']['file_name'],true)
        ];
        //$this->db->insert('Table', $object)
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusdatamhs($id){
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    //BAGIAN 1 NOMOR 5.1 JOBSHEET 4
    public function getmahasiswaById($id){
        return $this->db->get_where('mahasiswa', ['id'=>$id])->row_array();
    }

    //BAGIAN 2 NOMOR 5 JOBSHEET 4
    public function cariDataMahasiswa(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama', $keyword);
        //BAGIAN 2 NOMOR 7A JOBSHEET 4
        $this->db->or_like('nim', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

    public function ubahdatamhs(){
        $data=[
            "nim" => $this->input->post('nim',true),
            "nama" => $this->input->post('nama',true), // ini sama dengan htmlspecialchars($_POST['nama])
            "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
            "fotoMhs" => $this->input->post('fotoMhs',true),
            "fotoKtp" => $this->input->post('fotoKtp',true)
        ];
        //$this->db->insert('Table', $object)
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }
}

/* End of file mahasiswa_model.php */
?>
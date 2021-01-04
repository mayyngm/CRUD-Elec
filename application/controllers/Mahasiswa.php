<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

    //fungsi yang akan digunakan saat classnya diinstansiasi
    public function __construct()
    {
        //digunakan untuk menjalankan fungsi cinstruct pada class parrent(ci_controller)
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->helper(array('form', 'url'));
    }


    public function tambah()
    {
        $this->load->library('form_validation');
        $data['title']='Form Menambah Data Mahasiswa';
        //BAGIAN 1 NOMOR 7F JOBSHEET 4
        // $this->form_validation->set_rules('fieldname','fieldlabel','trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');

        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/tambah',$data);
            $this->load->view('template/footer');
        }else {
            #code
            var_dump($data['upload_data']['file_name']);
            // $this->mahasiswa_model->tambahdatamhs($data);
            // //untuk flash data mempunyai 2 parameter (nama flashdata/alias, isi dari flashdata)
            // $this->session->set_flashdata('flash-data','ditambahkan');
            // redirect('mahasiswa','refresh');
            
        }
    }

    public function hapus($id){
        $this->mahasiswa_model->hapusdatamhs($id);
        // untuk flasdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdata)
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('mahasiswa','refresh');
    }

    //BAGIAN 1 NOMOR 4.1 JOBSHEET 4
    public function detail($id){
        $data['title']='Detail Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getmahasiswaById($id);
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('template/footer');
    }
    
    //BAGIAN 1 NOMOR 7C JOBSHEET 4
    public function edit($id){
        $this->load->library('form_validation');
        $data['title']='Form Edit Data Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getmahasiswaById($id);
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/edit',$data);
            $this->load->view('template/footer');
        }else {
            #code
            $this->mahasiswa_model->ubahdatamhs();
            //untuk flash data mempunyai 2 parameter (nama flashdata/alias, isi dari flashdata)
            $this->session->set_flashdata('flash-data','diedit');
            redirect('mahasiswa','refresh');
    }
}

    //BAGIAN 1 NOMOR 8A JOBSHEET 4
    public function ubahdatamhs(){
        $data=[
            "nim" => $this->input->post('nim',true),
            "nama" => $this->input->post('nama',true), // ini sama dengan htmlspecialchars($_POST['nama])
            "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
            "fotoMhs" => $this->input->post('fotoMhs',true),
            "fotoKtp" => $this->input->post('fotoKtp',true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    //BAGIAN 2 NOMOR 4 JOBSHEET 4
    public function index(){
        //modul untuk load database
        //$this->load->database();
        $data['title']='List Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
        if ($this->input->post('keyword')){
            $data['mahasiswa']=$this->mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('template/footer');
    }
}

/* end of file Controllername.php */
?>
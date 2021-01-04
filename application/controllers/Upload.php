<?php 
 
class Upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		  
	}
 
	public function index(){
		$this->load->view('v_upload', array('error' => ' ' ));
    }
    
 
	public function aksi_upload(){
        $config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 500;
		$config['max_width']            = 2048;
		$config['max_height']           = 1000;
		$config['encrypt_name'] 		= true;
		$this->load->library('upload',$config);
		$keterangan_berkas = $this->input->post('keterangan_berkas');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for($i = 0; $i < $jumlah_berkas;$i++)
		{
            if(!empty($_FILES['berkas']['name'][$i])){
 
				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
	   
				if($this->upload->do_upload('file')){
					
					$uploadData = $this->upload->data();
					$data['nama_berkas'] = $uploadData['file_name'];
					$data['tipe_berkas'] = $uploadData['file_ext'];
                    $data['ukuran_berkas'] = $uploadData['file_size'];
                    var_dump($data);
					// $this->db->insert('tambah',$data);
				}
            }
        }
	}
	
}$this->load->helper(array('form', 'url'));
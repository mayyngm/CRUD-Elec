<?php
#percobaan 3

defined('BASEPATH') OR exit('No direct script access allowed');

#percobaan3d,e
class Home extends CI_Controller{
    //percobaan3-20
    public function index($name='')
    {
        #percobaan 3e
        //echo "Selamat Datang di Halaman Home"; percobaan 3-4c
        //$this->load->view('home/index');

        //percobaan3-15
        $data['title']='Home';

        //percobaan3-20
        //$data adalah sebuah array dengan isi arraynya adalah name dan diisi $name.
        $data['name']=$name;

        //percobaan 3-13
        $this->load->view('template/header',$data);//percobaan3-15-15b
        //echo "Selamat Datang di Halaman Home";

        //percobaan3-20
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }
}

/* end of file Controllername.php */
?>
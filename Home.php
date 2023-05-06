<?php
defined('BASEPATH') OR exit('no direct script acces allowed');

class Home extends CI_Controller {
    public function index() {
        // contoh data biodata anggota
        $data['title'] = "Tugas Teknologi Web";

        $this->load->view('Home_view', $data);
        $this->load->helper('url');

    }

    function anggota1(){
        $data['title'] = "Anggota1";

        $this->load->view('Home_anggota1', $data);
        $this->load->helper('url');
    }
    function anggota2(){
        $data['title'] = "Anggota2";

        $this->load->view('Home_anggota2', $data);
        $this->load->helper('url');
    }
    function anggota3(){
        $data['title'] = "Anggota3";

        $this->load->view('Home_anggota3', $data);
        $this->load->helper('url');
    }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    public function index(){
        
        $data['title']='Pendaftaran  Besar';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('mahasiswa/daftar',$data);
        $this->load->view('templates/footer');
    }

    public function hasil(){
        
        $data['title']='Kartu Hasil Studi';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('mahasiswa/daftar',$data);
        $this->load->view('templates/footer');
    }

    
    public function lamaran(){
        
        $data['title']='Pendaftaran Asisten';
        $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('mahasiswa/daftar',$data);
        $this->load->view('templates/footer');
    }
}
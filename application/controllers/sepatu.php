<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class sepatu extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Halaman Form";
        $this->load->view('v_header', $data);
        $this->load->view('v_form-sepatu', $data);
        $this->load->view('v_footer', $data);
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('noHp', 'No Hp', 'required|min_length[10]', [
            'required' => 'No Hp Harus diisi',
            'min_length' => 'No Hp terlalu pendek'
        ]);

        
        if ($this->form_validation->run() != true){
            $data['judul'] = "Halaman Hasil";
            $this->load->view('v_header', $data);
            $this->load->view('v_tampil-data-sepatu', $data);
            $this->load->view('v_footer', $data);
        }
        else{
            $data = [
                'nama' => $this->input->post('nama'),
                'noHp' => $this->input->post('noHp'),
                'sepatu' => $this->input->post('sepatu'),
                'noSepatu' => $this->input->post('noSepatu')
            ];
    
            $data['judul'] = "Halaman Hasil";
            $this->load->view('v_header', $data);
            $this->load->view('v_tampil-data-sepatu', $data);
            $this->load->view('v_footer', $data);

        }
    }

}
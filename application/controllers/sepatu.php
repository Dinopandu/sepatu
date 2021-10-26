<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('frominputsepatu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'nama pembeli', 'required|min_length[3]', [
            'required' => 'nama pembeli  Harus diisi',
            'min_lenght' => 'Kode terlalu pendek'
        ]);
        
        $this->form_validation->set_rules('telp', 'no telp', 'required|min_length[3]', [
            'required' => 'no telp Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);
        


        if ($this->form_validation->run() == FALSE) 
          {
            $this->load->view('frominputsepatu');
        } else { 
            $data = [
                'nama' => $this->input->post('nama'),
                'telp' => $this->input->post('telp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga'),
            ];
        
           if ($this->input->post('merk') == "Nike"){
               $data['harga'] = 375000;
           }else if($this->input->post('merk') == "Adidas"){
               $data['harga'] = 300000;
           }else if($this->input->post('merk') == "Kickers"){
            $data['harga'] = 250000;
        }else if($this->input->post('merk') == "Eiger"){
            $data['harga'] = 275000;
    }else if($this->input->post('merk') == "Bucherri"){
        $data['harga'] = 400000;
    }
    $this->load->view('hasildata', $data);
}

    }
}
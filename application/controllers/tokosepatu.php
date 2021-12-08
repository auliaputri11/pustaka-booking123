<?php 
class tokosepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-tokosepatu');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            [
                'required' => 'Nama Harus Di Isi',
                'min_length' => 'Nama Terlalu Pendek'
            ]
        );
        
        $this->form_validation->set_rules(
            'no',
            'no hp',
            'required|min_length[11]',
            [
                'required' => 'No Hp Harus Di Isi',
                'min_length' => 'No Hp Terlalu Pendek'
            ]
        );

        if($this->form_validation->run() != true) {
            $this->load->view('view-form-tokosepatu');
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'no' => $this->input->post('no'),
                'merk' => $this->input->post('merk'),
                'size' => $this->input->post('size'),
                'harga' => $this->input->post('harga'),
            ];

            if ($this->input->post('merk') == 'nike') {
                $data['harga'] = 375000;
            } elseif ($this->input->post('merk') == 'adidas') {
                $data['harga'] = 300000;
            } elseif ($this->input->post('merk') == 'vans') {
                $data['harga'] = 250000;
            } elseif ($this->input->post('merk') == 'eiger') {
                $data['harga'] = 275000;
            } elseif ($this->input->post('merk') == 'puma') {
                $data['harga'] = 400000;           
            }

            $this->load->view('view-data-tokosepatu', $data);
        }
    }
} 
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class konsultasi extends CI_Controller
{
    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'konsultasi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'konsultasi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'konsultasi/index.html';
            $config['first_url'] = base_url() . 'konsultasi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        /*$config['total_rows'] = $this->konsultasi_model->total_rows($q);
        $konsultasi = $this->konsultasi_model->get_limit_data($config['per_page'], $start, $q);*/

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'konsultasi_data' => $konsultasi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'konsultasi/konsultasi_list',
            'judul' => 'Data konsultasi',
        );
        $this->load->view('v_index', $data);
    }
   function __construct()
    {
        parent::__construct();
        $this->load->model('konsultasi_model');
        $this->load->library('form_validation');
    }

    /*public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'konsultasi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'konsultasi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'konsultasi/index.html';
            $config['first_url'] = base_url() . 'konsultasi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->konsultasi_model->total_rows($q);
        $konsultasi = $this->konsultasi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'konsultasi_data' => $konsultasi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'konsultasi/konsultasi_list',
            'judul' => 'Data konsultasi',
        );
        $this->load->view('v_index', $data);
    }*/

    public function read($id) 
    {
        $row = $this->konsultasi_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id_konsultasi' => $row->id_konsultasi,
        'nama' => $row->nama,
	    );
            $this->load->view('konsultasi/konsultasi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konsultasi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('konsultasi/create_action'),
            'action2' => site_url('konsultasi/create_action2'),
        'id_konsultasi' => set_value('id_konsultasi'),
	    'nama' => set_value('nama'),
        'konten' => 'konsultasi/konsultasi_form',
            'judul' => 'Data konsultasi',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'nama' => $this->input->post('nama',TRUE),
	    );

            $this->konsultasi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            //redirect(site_url('konsultasi'));
            $this->load->view('konsultasi/konsultasi_input', $data);
            $data = array(
                'answer' => site_url('konsultasi_rules')
            );
        }
    }

    public function create_action2() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'nama' => $this->input->post('nama',TRUE),
	    );

            $this->konsultasi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            //redirect(site_url('konsultasi'));
            $this->load->view('konsultasi/konsultasi_input', $data);
            $data = array(
                'answer' => site_url('konsultasi_rules')
            );
        }
    }
    /*
    public function update($id) 
    {
        $row = $this->konsultasi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('konsultasi/update_action'),
        'id_konsultasi' => set_value('id_konsultasi', $row->id_konsultasi),
		'nama' => set_value('nama', $row->nama),
		'isi_pertanyaan' => set_value('isi_pertanyaan', $row->isi_pertanyaan),
        'konten' => 'konsultasi/konsultasi_form',
            'judul' => 'Data konsultasi',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konsultasi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_konsultasi', TRUE));
        } else {
            $data = array(
        'nama' => $this->input->post('nama',TRUE),
		'isi_pertanyaan' => $this->input->post('isi_pertanyaan',TRUE),
	    );

            $this->konsultasi_model->update($this->input->post('id_konsultasi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('konsultasi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->konsultasi_model->get_by_id($id);

        if ($row) {
            $this->konsultasi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('konsultasi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konsultasi'));
        }
    }*/

    public function _rules() 
    {
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');

	$this->form_validation->set_rules('id_konsultasi', 'id_konsultasi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file konsultasi.php */
/* Location: ./application/controllers/konsultasi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-29 13:26:00 */
/* http://harviacode.com */
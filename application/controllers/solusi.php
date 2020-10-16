<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class solusi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('solusi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'solusi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'solusi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'solusi/index.html';
            $config['first_url'] = base_url() . 'solusi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->solusi_model->total_rows($q);
        $solusi = $this->solusi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'solusi_data' => $solusi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'solusi/solusi_list',
            'judul' => 'Data solusi',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->solusi_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id_solusi' => $row->id_solusi,
		'kode_solusi' => $row->kode_solusi,
		'isi_solusi' => $row->isi_solusi,
	    );
            $this->load->view('solusi/solusi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('solusi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('solusi/create_action'),
        'id_solusi' => set_value('id_solusi'),
	    'kode_solusi' => set_value('kode_solusi'),
	    'isi_solusi' => set_value('isi_solusi'),
        'konten' => 'solusi/solusi_form',
            'judul' => 'Data solusi',
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
        'kode_solusi' => $this->input->post('kode_solusi',TRUE),
		'isi_solusi' => $this->input->post('isi_solusi',TRUE),
	    );

            $this->solusi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('solusi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->solusi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('solusi/update_action'),
        'id_solusi' => set_value('id_solusi', $row->id_solusi),
		'kode_solusi' => set_value('kode_solusi', $row->kode_solusi),
		'isi_solusi' => set_value('isi_solusi', $row->isi_solusi),
        'konten' => 'solusi/solusi_form',
            'judul' => 'Data solusi',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('solusi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_solusi', TRUE));
        } else {
            $data = array(
        'kode_solusi' => $this->input->post('kode_solusi',TRUE),
		'isi_solusi' => $this->input->post('isi_solusi',TRUE),
	    );

            $this->solusi_model->update($this->input->post('id_solusi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('solusi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->solusi_model->get_by_id($id);

        if ($row) {
            $this->solusi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('solusi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('solusi'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('kode_solusi', 'kode_solusi', 'trim|required');
	$this->form_validation->set_rules('isi_solusi', 'isi_solusi', 'trim|required');

	$this->form_validation->set_rules('id_solusi', 'id_solusi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file solusi.php */
/* Location: ./application/controllers/solusi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-29 13:26:00 */
/* http://harviacode.com */
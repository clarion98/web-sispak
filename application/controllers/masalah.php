<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class masalah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('masalah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'masalah/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'masalah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'masalah/index.html';
            $config['first_url'] = base_url() . 'masalah/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->masalah_model->total_rows($q);
        $masalah = $this->masalah_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'masalah_data' => $masalah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'masalah/masalah_list',
            'judul' => 'Data masalah',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->masalah_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id_masalah' => $row->id_masalah,
        'kode_masalah' => $row->kode_masalah,
		'isi_pertanyaan' => $row->isi_pertanyaan,
	    );
            $this->load->view('masalah/masalah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('masalah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('masalah/create_action'),
        'id_masalah' => set_value('id_masalah'),
	    'kode_masalah' => set_value('kode_masalah'),
	    'isi_pertanyaan' => set_value('isi_pertanyaan'),
        'konten' => 'masalah/masalah_form',
            'judul' => 'Data masalah',
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
        'kode_masalah' => $this->input->post('kode_masalah',TRUE),
		'isi_pertanyaan' => $this->input->post('isi_pertanyaan',TRUE),
	    );

            $this->masalah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('masalah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->masalah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('masalah/update_action'),
        'id_masalah' => set_value('id_masalah', $row->id_masalah),
		'kode_masalah' => set_value('kode_masalah', $row->kode_masalah),
		'isi_pertanyaan' => set_value('isi_pertanyaan', $row->isi_pertanyaan),
        'konten' => 'masalah/masalah_form',
            'judul' => 'Data masalah',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('masalah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_masalah', TRUE));
        } else {
            $data = array(
        'kode_masalah' => $this->input->post('kode_masalah',TRUE),
		'isi_pertanyaan' => $this->input->post('isi_pertanyaan',TRUE),
	    );

            $this->masalah_model->update($this->input->post('id_masalah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('masalah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->masalah_model->get_by_id($id);

        if ($row) {
            $this->masalah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('masalah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('masalah'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('kode_masalah', 'Kode Masalah', 'trim|required');
	$this->form_validation->set_rules('isi_pertanyaan', 'Isi Pertanyaan', 'trim|required');

	$this->form_validation->set_rules('id_masalah', 'id_masalah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file masalah.php */
/* Location: ./application/controllers/masalah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-29 13:26:00 */
/* http://harviacode.com */
<?php

class Grant_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('usr_info')) 
        {
            redirect("login/index");
        }
        $this->load->model('Grant_access_model');
    }

    public function index()
    {
        $data['users'] = $this->Grant_access_model->rows();

        $this->load->view('templates/header');
        $this->load->view('grant_access/index', $data);
        $this->load->view('templates/footer');

    }
    public function add()
    {
        $this->form_validation->set_rules('user_id', 'Employee No.', 'trim|required');
        $this->form_validation->set_rules('position', 'position', 'trim|required');


        if ($this->form_validation->run()) {

            $data = array(
                'user_id'        => $this->input->post('user_id'),
                'pword'          => hash('sha256', 'abc123!@#'),
                'position'       => $this->input->post('position'),
                'created_by'     => 'opc-0822-0519',
                'date_created'   => date('Y-M-D'),
            );
            $result = $this->Grant_access_model->add($data);

            if ($result) {
                $this->session->set_flashdata('message', 'successfully created a user');
                redirect('Grant_access');

            } else {
                $this->session->set_flashdata('errormessage', 'you have failed to create a user');
                redirect('Grant_access/add');
            }
        }
        $this->load->view('templates/header');
        $this->load->view('grant_access/add');
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        // if ($this->form_validation->run()) {

            $this->form_validation->set_rules('user_id', 'Employee No.', 'trim|required');
            $this->form_validation->set_rules('position', 'position', 'trim|required');

            if ($this->form_validation->run()) {

                $data = array(
                    'user_id'        => $this->input->post('user_id'),
                    'position'       => $this->input->post('position'),
                    'created_by'     => 'opc-0822-0519',
                    'date_edited'   => date('Y-M-D'),
                );
                $result = $this->Grant_access_model->update($id, $data);
            }
        // }
        $data['users'] = $this->Grant_access_model->row($id);

        $this->load->view('templates/header');
        $this->load->view('grant_access/edit', $data);
        $this->load->view('templates/footer');
    }
}

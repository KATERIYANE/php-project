<?php

class login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index()
    {
       $this->load->view('login/index');
    }

    public function login ()
    {
        $this->form_validation->set_rules('user_id', 'Employee Number', 'trim|required');
        $this->form_validation->set_rules('pword', 'password', 'trim|required');

        if ($this->form_validation->run()) {

            $data = array(      
                'user_id'      => $this->input->post('user_id'),
                'pword'         => hash('sha256', $this->input->post('pword')),
                'is_deleted'    => 0,
            );
            $result = $this->login_model->login($data);
            // var_dump($result);
            // die;
            if ($result) {
                $this->session->set_userdata('usr_info', $result);
                redirect ('dashboard');
            } else {

                redirect('login/login');
            }  
        }
    
        $this->load->view('login/index');
        //    $this->load->model('templates/header');
        //    $this->load->model('login_model');
        // $this->load->model('templates/folder');
    }

    public function logout() 
    {
        $this->session->sess_destroy();
        redirect('login/login');
    }
    
}


      

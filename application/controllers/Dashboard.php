<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('usr_info')) 
        {
            redirect("login/index");
        }

    }

    public function index()
    {
        
        if($this->session->userdata('usr_info')) {
            $user = $this->session->userdata('usr_info');

            $this->load->view('templates/header');
            
            if($user->position == 'Accountant') {
                $this->load->view('dashboard/accountant');
            } else {
                $this->load->view('dashboard/index');
            }
            $this->load->view('templates/footer');
        }

    }
}



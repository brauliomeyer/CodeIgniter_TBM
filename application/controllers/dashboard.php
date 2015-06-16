<?php

class Dashboard extends CI_Controller
{
    
    public function index()
    {
        //Load different HTML templates for the view
        $this->load->view('dashboard/inc/header_view');
        $this->load->view('dashboard/inc/main_view');
        $this->load->view('dashboard/home/home_view');
        $this->load->view('dashboard/inc/footer_view');
    }
    
    public function logout()
    {
        //session_destroy();
        redirect('/');
    }    
}

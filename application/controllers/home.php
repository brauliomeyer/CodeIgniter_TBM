<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller
{
    public function index() 
    {
        $this->load->view('inc/header_view');
        $this->load->view('inc/main_view');
        $this->load->view('home/home_view');
        $this->load->view('inc/footer_view');
    }  
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('index');
        $this->load->view('templates/v_footer');
    }
}

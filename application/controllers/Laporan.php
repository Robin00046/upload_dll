<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_laporan');
        $this->load->view('laporan/v_laporan');
        $this->load->view('templates/v_footer');
    }
}

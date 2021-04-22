<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enter extends CI_Controller
{
    public function index()
    {
        $this->$login();
    }

    public function login()
    {

        $this->load->view('structure/header', ['title' => 'Login']);

        $this->load->view('enter/login');

        $this->load->view('structure/footer');
    }

    public function signing()
    {

        $this->load->view('structure/header', ['title' => 'SignIn']);

        $this->load->view('enter/signin');

        $this->load->view('structure/footer');
    }
}
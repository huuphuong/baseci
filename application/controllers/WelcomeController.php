<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WelcomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Welcome', 'Welcome');
        $this->load->helper('functions');
    }


    public function index()
    {
        $welcome = new Welcome;

        $this->blade->view('welcome_message');

    }


    public function user($user_id)
    {
        return $user_id;
    }


    public function store()
    {
        echo input('username');
        exit;
    }
}

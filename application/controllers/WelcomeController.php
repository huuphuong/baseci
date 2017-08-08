<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WelcomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Welcome');
    }


    public function index()
    {
        $welcome = Welcome::all();
        $this->blade->view('welcome_message', compact('welcome'));
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

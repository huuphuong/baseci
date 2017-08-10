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
		$welcome = new Welcome();
        $users = $welcome->getListUser();
        $this->blade->view('welcome_message', compact('users'));
    }


    public function create()
    {
        echo "Create";
    }


    public function store()
    {
       echo "Store";
    }



    public function update($id)
    {
        echo "Update";
    }


    public function delete($id)
    {
        // Delete record
        echo "Delete";
    }
}

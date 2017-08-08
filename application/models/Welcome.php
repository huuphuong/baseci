<?php 

class Welcome extends CI_Model
{
	public $table = 'users';
	public $primaryKey = 'user_id';

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');

	}


	public function getRule()
	{
		return [
			'name' => 'Phuong',
			'age' => 22
		];
	}

	public function getAll()
	{
		$q = $this->db->get($this->table);
		return $q->result_array();
	}
}
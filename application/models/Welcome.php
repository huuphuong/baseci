<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;


class Welcome extends Eloquent{
	public $table = 'users'; // your table name
	public $primaryKey = 'id'; // your table primary key
	

	// Declare your method
	public function getListUser() 
	{
		$result = DB::table($this->table)
					->get()
					->toArray();

		return $result;
	}

} // End class